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
					"SELECT mensaje,UNIX_TIMESTAMP(NOW())'timestamp',timestap'fecha',UNIX_TIMESTAMP(timestap)'fecha_stamp' FROM chat where idticket="+socket.ticket+" ORDER BY idchat DESC LIMIT 0 , 10",
					function  selectUsuario(err,results,field)
					{
						if(err){
							console.log("error :" + err.message);
							throw err;
						}
						sockets.forEach(function (socket) {
							//socket.emit('message',results);
						});
						io.sockets.in(socket.ticket).emit('message',results);
						//return results;
					});
	};

	sockets.push(socket);

	socket.on('adduser',function(msg){
		if(msg==undefined)
			msg=0;

		socket.ticket=msg;
		socket.join(msg);
		count++;
		io.sockets.emit('bienvenido',{
			text : 'TOTAL CONECTADOS ' + count
		});
		get();
	});


	socket.on('writing',function(user,tick){
		if(tick==undefined)
			tick=0;

		socket.in(socket.ticket).broadcast.emit('writing',user);

	});
	socket.on('insert',function(msg,tick){
		if(tick==undefined)
			tick=0;
		socket.broadcast.emit('writing_terminate','');
		client.query(
			"insert into chat (mensaje,timestap,idticket)values('"+htmlEncode(msg)+"',now(),"+tick+");"
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
		socket.broadcast.emit('bienvenido',{
			text : 'TOTAL CONECTADOS ' +count
		});
		socket.leave(socket.ticket);
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


