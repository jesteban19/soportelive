<?php

/*
	Framework NeoApp v.000.1
	esteban.programador@gmail.com
	Voew.php
*/

require_once ROOT.'libs/Smarty/Smarty.class.php';

class View extends Smarty
{
	private $_controlador;
	private $_js;
	private $_jsPlug;
	private $_layout;

	public function __construct(Request $peticion){
		parent::__construct();
		$this->_controlador=$peticion->getControlador();
		$this->_js=array();
		$this->_jsPlug=array();
		$this->_layout=DEFAULT_LAYOUT;
	}

	public function renderizar($vista,$item=false,$templateView=false,$template=false)
	{

		$this->template_dir=ROOT.'views'.DS.'layout'.DS.$this->_layout.DS;
		$this->config_dir=ROOT.'views'.DS.'layout'.DS.$this->_layout.DS.'configs'.DS;
		$this->cache_dir=ROOT.'tmp'.DS.'cache'.DS;
		$this->compile_dir=ROOT.'tmp'.DS.'template'.DS;

		$menu=array(
			array(
				'id' => 'Projects',
				'titulo' => 'Projects',
				'enlace' => BASE_URL
				),
			array(
				'id' => 'Services',
				'titulo' => 'Services',
				'enlace' => BASE_URL
				),
			array(
				'id' => 'Downloads',
				'titulo' => 'Downloads',
				'enlace' => BASE_URL
				),
			array(
				'id' => 'About',
				'titulo' => 'About',
				'enlace' => BASE_URL
				),
			array(
				'id' => 'Contact',
				'titulo' => 'Contact',
				'enlace' => BASE_URL
				)
		);

		$js=array();

		if(count($this->_js)){
			$js=$this->_js;
		}
		$_layoutParams=array(
			'ruta_css' => SITE_URL.'views/layout/'.$this->_layout.'/css/',
			'ruta_img' => SITE_URL.'views/layout/'.$this->_layout.'/img/',
			'ruta_js' => SITE_URL.'views/layout/'.$this->_layout.'/js/',
			'menu' => $menu,
			'js'=>$js,
			'jsPlug'=>$this->_jsPlug,
			'item'=> $item,
			'base_url' => BASE_URL,
			'site_url' => SITE_URL,
			'config' => array(
					'app_name' => APP_NAME,
					'app_slogan' => APP_SLOGAN,
					'app_company' => APP_COMPANY
				)
		);


		$rutaView=ROOT . 'views' . DS . $this->_controlador . DS . $vista . '.tpl';
		
		if(is_readable($rutaView)){
			$this->assign('_contenido',$rutaView);
		}else{
			throw new Exception("Error al cargar la  vista $rutaView");			
		}
		$this->assign('_layoutParams',$_layoutParams);
		if($templateView){
			$rutaTemplateView=ROOT . 'views' . DS . $this->_controlador . DS . $templateView . '.tpl';
			if(is_readable($rutaTemplateView))
				$this->display($rutaTemplateView);
			else
				throw new Exception("Error al mostrar el templateView $rutaTemplateView");			
		}else{
			if($template){
				$rutaTemplate=ROOT.'views'.DS.'layout'.DS.$this->_layout.DS. $template . '.tpl';
				if(is_readable($rutaTemplate))
					$this->display($rutaTemplate);
				else
					throw new Exception("Error al mostrar el template '$template'");
			}else{
				$this->display('template.tpl');
			}
			
		}
		
	}

	public function setJs(array $js)
	{
		if(is_array($js) && count($js)){
			for($i=0;$i<count($js);$i++){
				$this->_js[]=SITE_URL.'views/'.$this->_controlador.'/js/'.$js[$i].'.js';
			}
		}else{
			throw new Exception("Error de Js", 1);			
		}
	}

	public function setJsPlug(array $js)
	{
		if(is_array($js) && count($js)){
			for($i=0;$i<count($js);$i++){
				$this->_jsPlug[]=SITE_URL.'public/js/'.$js[$i].'.js';
			}
		}else{
			throw new Exception("Error al cargar el plugin Js");
		}
	}

	public function setLayout($layout=false){
		if($_layout){
			$this->_layout;
		}
	}

	public function widget($widget,$method,$options=array())
	{
		if(!is_array($options)){
			$options=array($options);
		}

		if(is_readable(ROOT.'widgets'.DS.$widget.'.php')){
			include_once ROOT.'widgets'.DS.$widget.'.php';
			$widgetClass=$widget.'Widget';
			if(!class_exists($widgetClass)){
				throw new Exception("Error al cargar el Widget ".$widget. ' ,no existe la clase');				
			}
			if(is_callable($widgetClass,$method)){
				if(count($options)){
					return call_user_func_array(array(new $widgetClass,$method),$options);
				}else{
					return call_user_func(array(new $widgetClass,$method));
				}
			}
		}

		throw new Exception("Error Widget no encuentra el el archivo $widget.php");		
	}
}

?>