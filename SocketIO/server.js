var socket = require('socket.io');
var express = require('express');
var https = require('https');
var http = require('http');
var logger = require('winston');

logger.remove(logger.transports.Console);
logger.add(logger.transports.Console,{colorize:true, timestamp:true});
logger.info('SocketIO > Listening on port');
    
    var app = express();
    var http_server = http.createServer(app).listen(3001);

    function emitNewOrder(http_serverserver){
        var io = socket.listen(server);
        io.socket.on('connection',function(http_server)
        {

        });
    }
    emitNewOrder(http_server);