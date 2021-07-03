<html>
<head>
        <title>CodeIgniter Tutorial</title>
       <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url().'headerlink/bootstrap.min.css'; ?>">
  <script src="<?php echo base_url().'headerlink/jquery.min.js'; ?>"></script>
  <script src="<?php echo base_url().'headerlink/bootstrap.min.js'; ?>"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">CodeIgniter3</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
      <li class="active"><a href="<?php echo base_url(); ?>about">About</a></li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Subscribe <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url(); ?>Auth/register">Create</a></li>
          <li><a href="#">View</a></li>
        </ul>

        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url(); ?>news/create">Blog Post</a></li>
          <li><a href="<?php echo base_url(); ?>news">View Blog</a></li>
        </ul>

    </ul>
  </div>
</nav>

           