<html>
<style>
@import 'https://fonts.googleapis.com/css?family=Material+Icons';

$clr-white-1: #ecf0f1;
$clr-white-2: darken($clr-white-1, 5%);
$clr-t300: #444;
$clr-t500: #95a5a6;
$clr-p300: #111;
$clr-a300: #e74c3c; //#FF6A6A; //salmon

$gray: rgba(255, 255, 255, 0.2);
$teal: cornflowerblue;
$menu: #444753;
$link-color: $teal;

$primary-button: $teal;
$secondary-button: #B2B9C5;

$v-gutter: .75rem;
$h-gutter: 2rem;
$toggle-gutter: 2px;
$toggle-width: 90px;
$toggle-height: 26px;

$container-shadow: 0.5rem 0.5rem 2rem 0 rgba(black, 0.2);
$trans: cubic-bezier(0.3,0,0.7,1);

$media-mobile: "only screen and (max-width: 720px)";

a {
  color: $link-color;
  text-decoration: none;
  &:hover {
    opacity: .8;
    cursor: pointer;
    text-decoration: underline;
  }
}

body { 
  padding: 5% 0;
  margin: 0;
  box-sizing: border-box;
  width: 100vw;
  height: 100vh;
  background: $clr-white-1;
  background: linear-gradient(30deg, $clr-white-2, $clr-white-1);
  font-family: 'Lato', Arial, sans-serif;
  font-weight: 500;
  letter-spacing: .05rem;
  
}

.profile {
  position: relative;
  display: flex;
  align-items: center;
  &:after {
    content: "";
    top: -$v-gutter;
    bottom: -$v-gutter;
    left: 0;
    right: -$v-gutter;
    position: absolute;
    background: rgba(255,255,255,.1);
  }
}
.user-photo { 
  display: inline-block;
  min-width: 40px;
  width: 40px;
  height: 40px;
  margin-left: $v-gutter;
  
  cursor: default;
  background: $clr-white-1;
  background: url('https://pre.images.century21.ca/Users/pic56342.jpg?crop=(263%2c173%2c550%2c388.25)&cropxunits=640&cropyunits=480&r=636135193218930000&mode=crop');
  background-position: center;
  background-size: cover;
  border-radius: 2px;
}

// NOTIFICATION CONTAINER

.notification-container {
  &:before {
    // triangle
    content: "";
    position: absolute;
    top: 1px;
    right: 0;
    width: 0;
    height: 0; 
    transform: translate(-1rem, -100%);
    border-left: .75rem solid transparent;
    border-right: .75rem solid transparent;
    border-bottom: .75rem solid white;
  }
  cursor: default;
  position: absolute;
  z-index: 999;
  top: 0;
  right: ($h-gutter*5);
  width: 400px;
  font-weight: 300;
  background: white;
  border-radius: 0.5rem;
  box-sizing: border-box;
  box-shadow: $container-shadow;
  h3 {
    text-transform: uppercase;
    font-size: 75%;
    font-weight: 700;
    color: #84929f;
    padding: $v-gutter*2 $h-gutter;
  }
  i {
    color: #b5c4d2;
    font-size: 140%;
    @vertical-align(50%);
    position: absolute;
    &.right {
      right: $h-gutter;
      &:hover {
        opacity: .8;
        cursor: pointer;
      }
    }
  }
   em {
     margin-right: $v-gutter;
     font-weight: 700;
     font-size: 115%;
     color: #b5c4d2;
     vertical-align: bottom;
     display: inline-block;
  }

  animation-name: dropPanel;
  animation-iteration-count: 1;
  animation-timing-function: all;
  animation-duration: .75s;
}

@keyframes dropPanel {
  0% {
    opacity: 0;
    transform: translateY(-100px) scaleY(.5);
  }
}

.notification {
  box-sizing: border-box;
  &.new {
    background: #f3f9fd;
  }
}

input.checkbox[type='checkbox']{
  display: none;
  + label {
    display: block;
  }
  &:not(:checked) + label {
    transition: height .25s;
    height: 0;
    padding: 0;
    font-size: 0;
    border: none;
    * {
      display: none; 
    }
  }
  &:checked + label {  
    height: ($v-gutter*3) + 1rem;
    padding: $v-gutter*1.5 $h-gutter*2 $v-gutter $h-gutter;   
    font-size: 75%;
    border-top: 1px solid rgba(0,0,0,.1);
  }
}

//------------------------------------

@mixin vertical-align($fifty-percent) {
    top: $fifty-percent;
    -webkit-transform: translateY(-$fifty-percent);
    -ms-transform: translateY(-$fifty-percent);
    transform: translateY(-$fifty-percent);
}

.red {
  color: #f8b2a6 !important;
}
.teal {
  color: desaturate(lighten($teal,5%),5%);
}
.gray {
  color: $gray;
}
.gray-bg {
  background: $gray !important;
}
.primary-button {
  background: $primary-button;
  border: 2px solid $primary-button;
}
.secondary-button {
  border: 2px solid $secondary-button;
  background: none;
  color: $secondary-button;
}

.left {
  margin-right: $v-gutter;
  float: left;
}
.right {
  margin-left: $v-gutter;
  float: right;
}
spacer {
  width: 100%;
}

button {
  float: right;
  border-radius: 3px;
  cursor: pointer;
  display: inline-block;
  font-weight: normal;
  padding: 8px 12px;
  border: 0;
  font-size: 13px;
  line-height: 13px;
  color: white;
  background: #B2B9C5;
  &:hover {
    opacity: .9;
  }
}

.notification-icon {
  position: relative;
  margin-right: 1em;
  border-radius: 5px;
  background: $clr-white-1;
  i {
    margin: .5rem;
  }
  &:nth-of-type(1) {
    i {
      background: -webkit-linear-gradient(300deg, #acccea, #6495ed);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
  }
  &:nth-of-type(2) i {
    background: -webkit-linear-gradient(300deg, #fff9ab, #00b8ff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
}

.num-count {
  position: absolute;
  user-select: none;
  cursor: default;
  font-size: 0.6rem;
  background: $clr-a300;
  width: 1.2rem;
  height: 1.2rem;
  color: $clr-white-1;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  top: -0.33rem;
  right: -.66rem;
  box-sizing: border-box;
}

main {
  display: flex;
  flex-flow: row;
  width: 90vw;
  height: 75vh;
  margin: 0 auto;
  background: white;
  border-radius: 0 0 .5em .5em;
  position: relative;
  box-shadow: $container-shadow;
}
nav {
  position: relative;
  width: 90vw;
  margin: 0 auto;
  -webkit-align-items: center;
  align-items: center;
  display: -webkit-flex;
  display: flex;
  flex-direction: row;
  background: linear-gradient(to right, $clr-p300, lighten($clr-p300, 8%));
  border-radius: .5em .5em 0 0;
  box-sizing: border-box;
  padding: $v-gutter $h-gutter;
  * {
    &:hover {
      cursor: pointer;
    }
  }
  .first-name {
    color: white;
  }
  .left {
    color: white;
  }
  .num-count {
    animation-name: scaleCount;
    animation-iteration-count: 1;
    animation-timing-function: all;
    animation-duration: 1s;
    animation-delay: 0s;
    
    @keyframes scaleCount {
      0% {
        transform: scale(0);
      }
      40% {
        transform: scale(1);
      }
      60% {
        transform: scale(.5);
      }
      80% {
        transform: scale(1.25);
      }
    }
  }
}
.menu {
  position: relative;
  order: 1;
  flex: 1 6 25%;
  padding: $h-gutter 0;
  border-radius: 0 0 0 .5rem;
  background: darken($menu,5%);
  color: #aaa;
  text-transform: uppercase;
  font-size: 70%;
  font-weight: 700;
  .num-count {
    position: absolute;
    @include vertical-align(70%);
    right: 1rem;
    width: auto;
    padding: 0 .5rem;
    border-radius: 1rem;
  }
  ul.active {
    background: lighten($menu,5%);
    margin-bottom: $v-gutter;
    
    li {
      padding-left: $h-gutter*2;
      &.active {
        color: white;
        &:before {
          content:"•";
          color: desaturate(lighten($teal,5%),5%);
          left: $h-gutter;
          position: absolute;
          @include vertical-align(65%);
          padding-left: .7em;
        }
      }
      &:first-child {
        padding-top: $v-gutter*2; 
      }
      &:last-child {
        padding-bottom: $v-gutter*2; 
      }
    }
  }
  > li {
    padding-left: $h-gutter*2 !important;
  }
  li {
    padding: $v-gutter $h-gutter;
    position: relative;
    i {
      @vertical-align(50%);
      position: absolute;
      font-size: 180%;
      &:not(.left) {
        right: $v-gutter*2;
        position: absolute;
        @include vertical-align(50%);
        &:hover {
          cursor: pointer;
        }
      }
      &.left {
        left: $h-gutter;
        position: absolute;
        @include vertical-align(50%);
      }
    }
    &.dropdown {
      &.active {
        background: $menu;
        margin-top: $v-gutter;
        padding: ($v-gutter*2) $h-gutter;
        color: white;
      }
    }
  }
}
.content {
  order: 2;
  flex: 1 6 75%;
}

// PROFILE CONTAINER

.profile-container {
  position: absolute;
  z-index: 99;
  top: 0;
  right: ($h-gutter)-($v-gutter);
  width: 400px;
  font-weight: 300;
  background: white;
  padding: $v-gutter*1.5 $v-gutter $v-gutter;
  //border-radius: 0.5rem;
  box-sizing: border-box;
  box-shadow: $container-shadow;
  .user-photo {
    width: 100px;
    height: 100px;
    margin: 0 $v-gutter $v-gutter 0;
    border-radius: 8px; //100%;
  }
  .user-email {
    display: block;
  }
  i {
    color: #b5c4d2;
    font-size: 110%;
  }
}

h1 {
  font-size: 125%;
}

hr {
  border: 0;
  clear: both;
  margin-bottom: $v-gutter;
  border-bottom: 1px solid rgba(0,0,0,.1);
}

// TOGGLE

.switch {
  position: relative;
  display: inline-block;
  margin: $v-gutter 0 0;
}

.switch > span {
  position: absolute;
  @include vertical-align(50%);
  pointer-events: none;
  font-weight: bold;
  font-size: 9px;
  text-transform: uppercase;
  text-shadow: 0 1px 0 rgba(0, 0, 0, .06);
  width: 50%;
  text-align: center;
}

input.check-toggle-round-flat:checked ~ .off {
  color: desaturate(lighten($teal,10%),10%);
}

input.check-toggle-round-flat:checked ~ .on {
  color: #fff;
}

.switch > span.on {
  left: $toggle-gutter;
  color: desaturate(lighten($teal,10%),10%);
}

.switch > span.off {
  right: $toggle-gutter;
  color: #fff;
}

.check-toggle {
  display: none;
}
.check-toggle + label {
  display: block;
  position: relative;
  cursor: pointer;
}

input.check-toggle-round-flat + label {
  width: $toggle-width;
  height: $toggle-height;
  background: desaturate(lighten($teal,5%),5%);
  border-radius: 5px;
}
input.check-toggle-round-flat + label:before, input.check-toggle-round-flat + label:after {
  display: block;
  position: absolute;
  content: "";
}


input.check-toggle-round-flat + label:after {
  top: $toggle-gutter;
  left: $toggle-gutter;
  bottom: $toggle-gutter;
  width: 50%;
  background-color: white;
  border-radius: 3px;
  transition: margin 0.2s;
  cursor: default;
}

input.check-toggle-round-flat:checked + label:after {
  margin-left: ($toggle-width/2) - ($toggle-gutter*2);
}
</style>
<body>
<nav>

  <i class="material-icons dp48 left">menu</i>

  <spacer></spacer>

  <div class="notification-icon right">
    <i class="material-icons dp48">email</i>
    <span class="num-count">2</span>
  </div>
  
  <div class="notification-icon right">
    <i class="material-icons dp48">notifications</i>
    <span class="num-count">13</span>
  </div>

  <div class="profile">
    <span class="user-photo"></span>
    <span class="first-name right">Helena</span>
  </div>

</nav>

<main>
  
  <div class="notification-container">
    <h3>Notifications
      <i class="material-icons dp48 right">settings</i>
    </h3>

    <input class="checkbox" type="checkbox" id="size_1" value="small" checked />
    <label class="notification new" for="size_1"><em>1</em> new <a href="">guest account(s)</a> have been created.<i class="material-icons dp48 right">clear</i></label>

    <input class="checkbox" type="checkbox" id="size_2" value="small" checked />
    <label class="notification new" for="size_2"><em>3</em> new <a href="">lead(s)</a> are available in the system.<i class="material-icons dp48 right">clear</i></label>
    
    <input class="checkbox" type="checkbox" id="size_3" value="small" checked />
    <label class="notification" for="size_3"><em>5</em> new <a href="">task(s)</a>.<i class="material-icons dp48 right">clear</i></label>

    <input class="checkbox" type="checkbox" id="size_4" value="small" checked />
    <label class="notification" for="size_4"><em>9</em> new <a href="">calendar event(s)</a> are scheduled for today.<i class="material-icons dp48 right">clear</i></label>

    <input class="checkbox" type="checkbox" id="size_5" value="small" checked />
    <label class="notification" for="size_5"><em>1</em> blog post <a href="">comment(s)</a> need approval.<i class="material-icons dp48 right">clear</i></label>
    
  </div>
  
  <!-- -->
  
  <div class="profile-container">
 
    <a class="right"><i class="material-icons dp48 right">settings</i></a>
   
    <span class="user-photo left"></span>

    <h1 class="user-name"><a>Helena Knox</a></h1>
    <span class="user-email">helenaknox@gmail.com</span>

  <div class="switch">
    <input id="language-toggle" class="check-toggle check-toggle-round-flat" type="checkbox">
    <label for="language-toggle"></label>

    <span class="on">EN</span>
    <span class="off">FR</span>

  </div>
  
    <hr />
    <button class="button secondary-button left">Switch User</button>
    <button class="button primary-button right">Sign Out</button>

  </div>
  
  <!-- -->
  
  <ul class="menu">
    <li><i class="material-icons dp48 gray left">dashboard</i> News Feed</li>
    <li><i class="material-icons dp48 gray left">home</i> Properties</li>
    
    <li class="dropdown active"><i class="material-icons dp48 teal left">supervisor_account</i> Client Relations <i class="material-icons dp48">expand_more</i></li>
      <ul class="active">
        <li class="active">Tasks & Activities <span class="num-count gray-bg">13</span></li>
        <li>Contacts</li>
        <li>Marketing</li>
        <li>Action Plans</li>
        <li>Calendar</li>
        <li>Guest Accounts</li>
      </ul>

    <li class="dropdown"><i class="material-icons dp48 gray left">timeline</i> Reporting  <i class="material-icons dp48">expand_more</i></li>
    <li class="dropdown"><i class="material-icons dp48 gray left">face</i> Users  <i class="material-icons dp48">expand_more</i></li>
  </ul>
  
  <div class="content"></div>
</main><script type="text/javascript">
 Inspiration by --
 https://dribbble.com/shots/3003823-Notification-Dropdown/attachments/627751
</script>
</body>
</html>