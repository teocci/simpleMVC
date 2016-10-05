<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Video Monitor</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>
<body onload="connect();">
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-1 column">
            </div>
            <div class="col-md-6 column">
                <div class="thumbnail">
                    <div class="caption" id="dialog"></div>
                </div>
                <form onsubmit="onSubmit(); return false;">
                    <select style="margin-bottom:8px" id="client_list">
                        <option value="all">Everyone</option>
                    </select>
                    <textarea class="textarea thumbnail" id="textarea"></textarea>
                    <div class="say-btn"><input type="submit" class="btn btn-default" value="Send" /></div>
                </form>
                <div>
                    <b>Room list: </b> ( currently in Room
<?php echo isset($_GET['room_id'])&&intval($_GET['room_id']) > 0 ? intval($_GET['room_id']):1; ?>）<br>
<a href="/?room_id=1">Room 1</a>
<a href="/?room_id=2">Room 2</a>
<a href="/?room_id=3">Room 3</a>
<a href="/?room_id=4">Room 4</a>
</br></br>
</div>
</div>
<div class="col-md-3 column">
    <div class="thumbnail">
        <div class="caption" id="userlist"></div>
    </div>
</div>
</div>
</div>

<!-- Include these three JS files: -->
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/websocket.js"></script>
<script type="text/javascript">
    /* global room_id */
    var room_id = <?php echo isset($_GET['room_id']) ? $_GET['room_id'] : 1?>;
</script>
</body>
</html>