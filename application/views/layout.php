<html>
    <head>
        <title> Welcome to the demo application</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>/css/main.css"></link>
        <script src="<?php echo base_url(); ?>/js/jquery-latest.min.js" type="text/javascript"></script>         
    </head>
    <body>
        <div id="header"><?php $this->load->view('header'); ?></div>
        <div id="main"><?php $this->load->view($main); ?></div>
        <div id="footer"><?php $this->load->view('footer'); ?></div>
    </body>
    
</html>