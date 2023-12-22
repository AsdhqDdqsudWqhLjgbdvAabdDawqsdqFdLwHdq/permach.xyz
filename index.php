<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.8">
  <meta property="og:type" content="website"/>	
  <meta property="og:site_name" content=""/>	
  <meta name="apple-mobile-web-app-title" content="Permach">
  <meta property="og:title" content="Permach"/>
  <meta property="og:description" content="This is a website."/>	
  <meta property="og:url" content="https://permach.xyz/"/>
  <meta name="theme-color" content="#000000"/>
  <title>Permach</title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico">
  <link rel="apple-touch-icon" href="favicon.ico">
  <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'/>
  <script src="assets/script/particles.js"></script>
  </head>
<script>
particlesJS.load('particles-js', 'assets/script/particles.json', function() {
  console.log('');
});
</script>
<body>
<div id="particles-js"></div>
  <div class="container">
    <nav class="main-nav">
      <a href="https://permach.xyz/"><img src="assets/img/permach-logo.png" alt="logo" class="logo"></a>
      <ul class="main-menu">
        <li><a data-translate="guilds" href="//guilds.permach.xyz" target="_blank">Гильдии</a></li>
        <li><a data-translate="meta" href="//nohello.permach.xyz" target="_blank">Мета</a></li>
      </ul>
    </nav>
</div>
  <div class="content">
    <div class="info">
        <div id="avatar-border"><img id="avatar" src="assets/img/permach.png"></div>
        <span id="title">Permach</span>
        <span id="desc">Web Developer</span>
    </div>
    <div class="social">
    <a href="//discordapp.com/users/687661528337350705" target="_blank"><i class="bx bxl-discord-alt"></i></a>
    <a href="//steamcommunity.com/id/permachdev/" target="_blank"><i class="bx bxl-steam"></i></a>
    <a href="//t.me/permachdev" target="_blank"><i class="bx bxl-telegram"></i></a>
    </div>
  </div>
<div id="particles-js"><canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="1324" height="939"></canvas></div>

</body>
<style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

html, body {
    background-color: #232323;
    font-size: 15px;
    line-height: 1.5;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    overflow: hidden;
}

a {
  text-decoration: none;
  z-index: 1000;
  color: #fff;
}

ul {
  list-style: none;
  z-index: 1000;
}

.container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #303030;
    color: #fff;
    padding: 10px;
    z-index: 1001;
    box-shadow: 0 1px 10px 0 black;
    -moz-user-select: none; 
    -webkit-user-select: none; 
    -ms-user-select: none; 
    -o-user-select: none; 
    user-select: none;
}

.content {
  display: flex;
  flex-direction: column;
  justify-content: center;
  height: 100vh;
}

.main-menu {
  display: flex;
}

.main-nav {
  display: flex;
  align-items: center;
  justify-content: space-between;
  color: #fff;
  height: 60px;
  padding: 20px 0;
  z-index: 1001;
  font-size: 20px;
}

.main-nav .logo {
  width: 225px;
  margin-left: 25px;
}

.main-nav ul {
  text-align: right;
}

.main-nav ul li {
  padding: 0 10px;
}

.main-nav ul li a {
  padding-bottom: 2px;
}

.main-nav ul li a:hover {
  border-bottom: 2px solid #fff;
}

.info {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

#avatar-border {
    z-index: 1000;
}

#avatar {
    -webkit-animation-name: shakal;
	-webkit-animation-duration: 6.0s;
   	-webkit-animation-iteration-count: infinite;
	-webkit-animation-timing-function: linear;
    border-radius: 50%;
}

#avatar::selection {
    background-color: #185c66;
}

#title {
    font-size: 3.5em;
    color: #fff;
    font-weight: bold;
    font-family: Arial;
    z-index: 1000;
}

#title::selection {
    background-color: #185c66;
}

#desc {
    font-size: 2em;
    font-family: Arial;
    z-index: 1000;
    font-weight: 700;
    color: #7e7e7e;
}

#desc::selection {
    background-color: #185c66;
}

.social {
  display: inline-block;
  justify-content: center;
  flex-flow: row wrap;
  position: fixed;
  bottom: 0px;
  left: 50%;
  transform: translateX(-50%);
  font-size: 65px;
  color: #fff;
  z-index: 1000;
  -moz-user-select: none; 
  -webkit-user-select: none; 
  -ms-user-select: none; 
  -o-user-select: none; 
  user-select: none;
}

.social a {
    transition: 0.3s;
}

.social a:hover {
    color: rgb(255, 123, 222);
}
@-webkit-keyframes shakal 
{
	0% 
	{
		-webkit-transform: rotateZ(0deg);
	}
		
	50% 
	{
		-webkit-transform: rotateZ(180deg);
	}
	
	100% 
	{
		-webkit-transform: rotateZ(360deg);
	}
}
@media screen and (max-width: 1920px) {
  #avatar-border {
    height: 200px;
    width: 200px;
  }
  #avatar {
    height: 200px;
    width: 200px;
  }
  #title {
    font-size: 2.5em;
  }
  #desc {
    font-size: 1.2em;
  }
  .social {
    font-size: 55px;
  }
}

@media screen and (max-width: 1200px) {
  #avatar-border {
    height: 150px;
    width: 150px;
  }
  #avatar {
    height: 150px;
    width: 150px;
  }
  #title {
    font-size: 2em;
  }
  #desc {
    font-size: 1em;
  }
  .social {
    font-size: 45px;
  }
}

@media screen and (max-width: 768px) {
  .container {
    padding: 10px;
  }
  .main-nav {
    padding: 10px 0;
    font-size: 15px;
  }
  .main-nav .logo {
    width: 135px;
    margin-left: 15px;
  }
  .main-nav ul.main-menu {
    margin-left: 10px;
  }
  #avatar-border {
    height: 200px;
    width: 200px;
  }
  #avatar {
    height: 200px;
    width: 200px;
  }
  #title {
    font-size: 3em;
  }
  #desc {
    font-size: 1.5em;
  }
  .social {
    font-size: 55px;
  }
}

@media screen and (max-width: 480px) {
  #avatar-border {
    height: 150px;
    width: 150px;
  }
  #avatar {
    height: 150px;
    width: 150px;
  }
  #title {
    font-size: 2.5em;
  }
  #desc {
    font-size: 1.2em;
  }
  .social {
    font-size: 45px;
  }
}

#particles-js canvas {
	display: block;
	vertical-align: bottom;
	-webkit-transform: scale(1);
	-ms-transform: scale(1);
	transform: scale(1);
	opacity: 1;
	-webkit-transition: opacity .8s ease, -webkit-transform 1.4s ease;
	transition: opacity .8s ease, transform 1.4s ease
}

#particles-js {
	width: 100%;
	height: 100%;
	position: fixed;
	z-index: 1;
	top: 50px;
	left: 0;
}
</style>
  <script>
    $(document).ready(function() {
          var translations = {
            en: {
                guilds: 'Guilds"',
                meta: 'NoHello',
            },
            ru: {
                guilds: 'Гильдии"',
                meta: 'Мета',
            },
          };
    
          var userLanguage = navigator.language.substr(0, 2);
          var currentLanguage = translations[userLanguage] ? userLanguage : 'en';
    
          translate(currentLanguage);
    
          function translate(language) {
            $('[data-translate]').each(function() {
              var key = $(this).data('translate');
              $(this).html(translations[language][key]);
            });
          }
        });
</script>
</html>