var mysql=require('mysql');


/*var client=mysql.createConnection({
	user : 'neomaster',
	password : 'peru2013',
	host : '204.93.172.30',
	port : '3306',
	insecureAuth : true,
	});


client.query('USE zeususer_soportelive');
*/


var client=mysql.createConnection({
	user : 'root',
	password : '123',
	host : 'localhost',
	port : '3306',
	insecureAuth : true,
	});
	client.query('USE mydb');


/*var client=mysql.createConnection({
	user : 'abarr_neomaster',
	password : 'peru2013',
	host : 'mastabeats.com',
	port : '3306',
	insecureAuth : true,
	});
	client.query('USE abarrera_soportelive');
*/


var http = require('http');

var socketio = require('socket.io');
var express = require('express');

var router = express();
var server = http.createServer(router);
var io = socketio.listen(server);

var count=0;

router.get('/',function(req,res){
	res.sendfile(__dirname+'/index.html');
});

var sockets = [];

io.on('connection',function(socket){

	function get(){
		client.query(
					"SELECT nombre,mensaje,UNIX_TIMESTAMP(NOW())'timestamp',timestap'fecha',UNIX_TIMESTAMP(timestap)'fecha_stamp' FROM chat where idticket="+socket.ticket+" ORDER BY idchat DESC LIMIT 0 , 10",
					function  selectUsuario(err,results,field)
					{
						if(err){
							console.log("error :" + err.message);
							throw err;
						}
						
						io.sockets.in(socket.ticket).emit('message',results);
						//return results;
					});
	};

	//agregamos un socket al array 
	sockets.push(socket);

	//cuando agregamos un usuario  cuando se conecte
	socket.on('adduser',function(msg,type){
		if(msg==undefined)
			msg=0;

		socket.ticket=msg;
		socket.join(msg);
		count++;

		io.sockets.in(socket.ticket).emit("waiting",io.sockets.clients(socket.ticket).length,socket.ticket);
		get();

		//luego emitimos una notificacion al cpanel para indicar que hay un ticket que ya entro.!
		if(type=='usuario') //solo mandar la notificacion si son usuarios y no supports entrando al chat
			socket.broadcast.emit('notificacion_new_user',msg);
	});

	socket.on('close_ticket',function(){
		socket.in(socket.ticket).broadcast.emit('close_ticket','closeee');
	});
	socket.on('writing',function(user,tick){
		if(tick==undefined)
			tick=0;

		socket.in(socket.ticket).broadcast.emit('writing',user);

	});

	socket.on('writing_end',function(id,name){
		socket.in(socket.ticket).broadcast.emit('writing_end',name);
	});

	socket.on('insert',function(msg,tick,nombre){
		if(tick==undefined)
			tick=0;
		socket.broadcast.emit('writing_terminate','');
		client.query(
			"insert into chat (mensaje,timestap,idticket,nombre)values('"+htmlEncode(msg)+"',now(),"+tick+",'"+htmlEncode(nombre)+"');"
			,function(err,results,field){
				if(err){
					console.log("error :" + err.message);
					throw err;
				}
				get();
			});
	});

	socket.on('disconnect', function(){
		// remove the username from global usernames list
		//delete usernames[socket.username];
		// update list of users in chat, client-side
		//io.sockets.emit('updateusers', usernames);
		// echo globally that this client has left
		count--;		
		socket.leave(socket.ticket);
		io.sockets.in(socket.ticket).emit("waiting",io.sockets.clients(socket.ticket).length);
	});
});



	function htmlEncode(value){
		if(value.length==0 || value==undefined) return '';
		value=value.replace(/"/g, "&#34;");
		value=value.replace(/%/g, "&#37;");
	    return value.replace(/'/g, "&#39;"); 
	}

//cerramos el mysql
//client.end();
server.listen(process.env.PORT || 3000, process.env.IP || "0.0.0.0", function(){
  var addr = server.address();
  //console.log("Chat server listening at", addr.address + ":" + addr.port);
});


