<?php
if($_GET['action'] == 'like'){
    $string1 = $_POST['csrfmiddlewaretoken'];
    //$recipientName = mysql_real_escape_string($_POST['firstName']);
    
    if(empty($string1)){
        $status = 'error';
        $message = 'Person does not exist';
    }
    else{
        //TO DO: Add sender's like to the recipientName's list of likes
        
        $status = "success";
        $message = "Thanks for liking me!";
    }
    
    //return json response
    $data = array(
        'status' => $status,
        'message' => $message
    );
    
    echo json_encode($data);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>teplac&#39;s Profile | SoWink</title>
<link rel="shortcut icon" type="image/x-icon" href="http://ec2-50-18-184-255.us-west-1.compute.amazonaws.com/media/img/favicon.ico"/>

<link rel="stylesheet" media="screen,projection,tv" href="http://ec2-50-18-184-255.us-west-1.compute.amazonaws.com/media/css/common-min.css?build=de28549" />
  <link rel="stylesheet" media="screen,projection,tv" href="http://ec2-50-18-184-255.us-west-1.compute.amazonaws.com/media/css/loggedin-min.css?build=de28549" />
<link rel="stylesheet" media="screen,projection,tv" href="http://ec2-50-18-184-255.us-west-1.compute.amazonaws.com/media/css/users-min.css?build=de28549" />
<link rel="stylesheet" media="screen,projection,tv" href="http://ec2-50-18-184-255.us-west-1.compute.amazonaws.com/media/css/create_date-min.css?build=de28549" />
<link rel="stylesheet" media="screen,projection,tv" href="http://localhost/HTMLstuff/AJAX/Like Button/likepopup.css" />  
  <!--[if lte IE 7]>
<link rel="stylesheet" media="screen,projection,tv" href="http://ec2-50-18-184-255.us-west-1.compute.amazonaws.com/media/css/ie-min.css?build=de28549" />
<![endif]-->
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body class="profile-side profile" data-media-url="http://ec2-50-18-184-255.us-west-1.compute.amazonaws.com/media/" data-user="{&#34;username&#34;: &#34;dtonys&#34;, &#34;url&#34;: &#34;/profile/user/dtonys&#34;, &#34;picture_url&#34;: &#34;http://ec2-50-18-184-255.us-west-1.compute.amazonaws.com/media/uploads/avatars/1310850741014360500b6df5cfe2b8fe7b24.jpg&#34;, &#34;id&#34;: 193, &#34;display&#34;: &#34;Tony&#34;}" data-production="true">
    <span style="display:none" data-looking="True" data-self-profile=""></span>
  

<div id="header-top">
  <div id="mojo-jojo">    <div id="mojo-bar">
                        <div class="bar">
      <div class="progress" style="width:48%"><span class="current">144</span> / 300 <abbr title="Mojo Experience Points">MXP</abbr></div>
    </div>

  </div>
  </div>
  <ul id="head-ul">
	        	<li id="mojo-li">Mojo <strong>Lv. 5</strong> (Amateur)</li>
  	<li id="money-li" data-coins="450" data-winkcash="0"><ul>
        <li class="coins"><div></div><span class="my-coins">450</span></li>

        <li class="winkcash"><div></div><span class="my-winkcash out">0</span></li>
    </ul></li>
    <li id="account-info"><a title="More Options" href="#">dtonys</a><span></span></a>
      <div class="sub"><ul>
        <li id="sub-account-info"><a class="modal-form-trigger" data-restore="1" data-for-modal="account-info-modal" data-overlay="1" href="#"><div></div>Account Info</a></li>
                <li id="sub-log-out"><a href="/logout" title="Log out of SoWink"><div></div>Log Out</a></li>
      </ul></div>

    </li>
    <div class="clear="></div>
  </ul>
</div>

<div id="header-wrap">
  <div id="header" role="banner">
    <h1><a class="prod"  href="/home" title="SoWink home">SoWink</a></h1>

        <div id="nav-main" role="navigation">

                  <ul>
          <li id="nav-home"><a class="nav-a" href="/home"><span></span>Home</a>
          </li>
          <li id="nav-profile"><a class="nav-a" href="/profile/user/dtonys"><span></span>Profile</a></li>
          <li id="nav-messages"><a class="nav-a" href="/messages/"><span></span>Messages</a></li>
          <li id="nav-winkdate"><a class="nav-a" href="#"><span></span>WinkDate</a>
            <div class="sub">

              <ul id="events-ul">
                <li><h2><a href="/events/">Events</a></h2>
                <li><a href="/events/">All Events</a></li>
                <li><a href="/events/dates">Dates</a></li>
                <li><a href="/events/group-dates">Group Dates</a></li>
              </ul>
              <ul id="groups-ul">

                <li><h2><a href="/search/groups">Group Date</a></h2>
                <li><a href="/groups/new">My Group</a></li>
                <li><a href="/search/groups">Browse Groups</a></li>
                <li><a href="/events/group-dates">Upcoming Dates</a></li>
              </ul>
              <ul id="speed-ul">
                <li class="off"><h2><a href="#" title="Coming soon!">Speed Date</a></h2>

                <li class="off"><a href="#" title="Coming soon!">Blind Date</a></li>
                <li class="off"><a href="#" title="Coming soon!">Speed Date</a></li>
                <li class="off"><a href="#" title="Coming soon!">Chat Mixer</a></li>
              </ul>
          </div>
        </li>
        <li id="nav-browse"><a class="nav-a" href="/search/"><span></span>Browse</a></li>

        <li id="nav-connections"><a class="nav-a" href="/favorites/"><span></span>Connections</a></li>
        <li id="nav-mall"><a class="nav-a" href="/mall/gifts/list"><span></span>Mall</a></li>
      </ul>
    </div>      </div></div>

<div id="hr-wrap"><hr/></div><div id="content-wrap">
    <div id="content">
          <section id="sidebar">  <section id="pictures">

    <div id="main-picture">
                      <a href="#" id="picture-modal-trigger">
                              <img src="http://ec2-50-18-184-255.us-west-1.compute.amazonaws.com/media/uploads/avatars/13107623264372060bf2f1e4a35135416153.jpg" alt="Tessa&#39;s picture" title="Tessa&#39;s picture"/>
  
      </a>      <ul id="profile-picture-controls">
                  <li><a id="profile-picture-zoom" href="#" title="View the picture&#39;s full size.">Zoom+</a></li>
                      <li><a class="modal-form-trigger" href="#" data-for-modal="flag-picture-modal" title="Flag this picture for removal">Flag</a></li>
                                </ul>

              <div id="flag-picture-modal" class="pop-modal modal off">
          <div class="flag-picture">
  <h2>Flag Tessa&#39;s picture</h2>
  <p>Images containing nudity, children, celebrities, artwork, fake content or otherwise in violation of <a href="/terms" target="_blank">SoWink's Terms of Service</a> should be flagged for removal!</p>
  <p class="subtle">WARNING: Inappropriately flagging a user's picture without cause may result in a decrease in your Mojo. Are you sure you wish to continue with flagging this picture?</p>

  <form class="flag-controls" action="/profile/flag_picture/153" method="POST">
    <div style='display:none'><input type='hidden' name='csrfmiddlewaretoken' value='f9ab4408c239e651ac85bee6bdd0f906' /></div>
    <input type="hidden" name="next" value="/profile/user/teplac" />
    <input type="submit" class="plain-submit" value="Flag Picture" />
    <a href="#" class="cancel">Cancel</a>
  </form>
</div>
        </div>
          </div>

                    <div id="picture-modal" class="modal fixed-modal off">
        <img src="http://ec2-50-18-184-255.us-west-1.compute.amazonaws.com/media/uploads/avatars/1310762084694081d881e96d2cded75d64c6.jpg" alt="Tony&#39;s picture" title="Tony&#39;s picture"/>
        <form action="/profile/user/teplac/zoom_picture" method="POST">
          <div style='display:none'><input type='hidden' name='csrfmiddlewaretoken' value='f9ab4408c239e651ac85bee6bdd0f906' /></div>
          <input type="hidden" name="zoom_picture" value="1"/>
        </form>
      </div>
      </section>
  <section id="actions">
    <p id="like-text" class="triangle-isosceles" >Nothing!</p>
    <ul> 
      <li>          <form action="?action=like" method="POST">
    <div style='display:none'><input type='hidden' name='csrfmiddlewaretoken' value='d325e77bf9ff53db079b7c442ad7dc0f' /></div> 
    <input type="submit" name="like_profile" data-status="default"
          class="btn on"
        value="Like"/>
  </form></li> 
      <li><form action="" method="POST">
    <div style='display:none'><input type='hidden' name='csrfmiddlewaretoken' value='f9ab4408c239e651ac85bee6bdd0f906' /></div>
    <input type="submit" name="admire_profile"
      disabled="disabled" class="btn off" title="Coming soon!"
    value="Admire"/>

  </form></li>
      <li><form action="" method="POST">
    <div style='display:none'><input type='hidden' name='csrfmiddlewaretoken' value='f9ab4408c239e651ac85bee6bdd0f906' /></div>
    <input type="submit" name="wink_profile"
      disabled="disabled" class="btn off" title="Coming soon!"
    value="Wink"/>
  </form></li>
    </ul>
    <div>
      <form action="/mall/gifts/list/teplac" method="GET">
    <input type="submit" name="gift_profile"
          class="gift btn on"
        value="Send a gift"/>

  </form>
    </div>
    </ul>
  </section>
  <section id="badges" class="side-list">
    <h1>Badges</h1>
                      <ol>
        <li>      <div class="u-alpha-badge">

      <img class="pers-badge" src="http://ec2-50-18-184-255.us-west-1.compute.amazonaws.com/media/img/alpha.png" alt="Alpha Tester Badge"/>
    </div>
  </li>        <li><div class="u-mojo-badge">
    <img class="pers-badge" src="http://ec2-50-18-184-255.us-west-1.compute.amazonaws.com/media/mojo/mojo9.png" alt="Pickup Artist" title="Pickup Artist"/>
  </div></li>        <li>          <div class="u-pers-badge">
      <a href="/quizzes/personality/type/10" title="Read about The Social Butterfly">
        <img class="pers-badge" src="http://ec2-50-18-184-255.us-west-1.compute.amazonaws.com/media/quizzes/badges/pers-butterfly.png" alt="Badge: The Social Butterfly"/>

      </a>
    </div>
  </li>      </ol>
  </section>
  <section id="facts-bio" class="side-list">
    <h1>My WinkFacts</h1>        <div id="num-likes">
      4 Likes
    </div>

        <ul id="bio-summary">
      <li>
  <span class="label">Last Online</span>
    <span class="value online">12 hours ago</span>
</li>
<li>
  <span class="label">Age</span>
  <span class="value">23</span>

</li>
<li>
  <span class="label">Height</span>
  <span class="value">5&#39; 8&#34;</span>
</li>
<li>
  <span class="label">Gender</span>
  <span class="value">Girl</span>

</li>
<li>
  <span class="label">Body Type</span>
  <span class="value">Voluptuous</span>
</li>
<li>
  <span class="label">Status</span>
  <span class="value">In a serious relationship</span>
</li>

<li>
  <span class="label">Ethnicity</span>
  <span class="value">White</span>
</li>
<li>
  <span class="label">Religion</span>
  <span class="value">Agnostic</span>
</li>
<li>

  <span class="label">Speaks</span>
  <span class="value">English</span>
</li>
<li>
  <span class="label">Education</span>
  <span class="value">Vocational school</span>
</li>
<li>
  <span class="label">Occupation</span>

  <span class="value">unknown</span>
</li>
<li>
  <span class="label">Smokes</span>
  <span class="value">Occasionally</span>
</li>
<li>
  <span class="label">Drinks</span>
  <span class="value">Only when sober</span>

</li>
    </ul>
  </section>
  <section id="looking-for" class="side-list">
    <h1>Looking for...</h1>    <ul id="looking-summary">
              <li>
  <span class="label">Ages</span>
  <span class="value">18 to 35</span>

</li>
<li>
  <span class="label">Gender</span>
  <span class="value">a lil&#39; of both</span>
</li>
<li>
  <span class="label">Seeking</span>
  <span class="value">fun events, casual dating, making new friends, a long-term relationship</span>

</li>    </ul>
  </section>
        <section id="gifts-received" class="side-list">
      <h1>Recent Gifts</h1>
      <ul>        <li><div class="g-image">
          <img src="http://ec2-50-18-184-255.us-west-1.compute.amazonaws.com/media/mall/gifts/oj.png" alt="Mimosa" title="Mimosa"/>
        </div></li>
              <li><div class="g-image">

          <img src="http://ec2-50-18-184-255.us-west-1.compute.amazonaws.com/media/mall/gifts/camera-instant.png" alt="Instant Camera" title="Instant Camera"/>
        </div></li>
              <li><div class="g-image">
          <img src="http://ec2-50-18-184-255.us-west-1.compute.amazonaws.com/media/mall/gifts/cupcake.png" alt="Sprinkled Cupcake" title="Sprinkled Cupcake"/>
        </div></li>
      </ul>
    </section>
  </section>
      <section id="main-content">

                <ul id="side-links">
          <li><a class="modal-form-trigger" data-for-modal="profile-report-modal" href="#">Report Tessa</a></li>
      <li><a href="/messages/new?to=teplac">Send message</a></li>
    </ul>
    <div id="profile-report-modal" class="pop-modal off">
      <div class="flag-profile">
  <form action="/profile/flag/38" method="POST">
    <h2>Report Tessa</h2>

    <div style='display:none'><input type='hidden' name='csrfmiddlewaretoken' value='f9ab4408c239e651ac85bee6bdd0f906' /></div>
          <select name="reason">
                  <option value="fake">Fake Profile</option>
                  <option value="spam">Spam/Profanity</option>
                  <option value="content">Illicit Content</option>
                  <option value="behavior">Inappropriate Behavior</option>
                  <option value="other">Other (please specify)</option>

              </select>
        <textarea name="notes" rows="4" columns="10" name="notes" placeholder="Describe your reason here..."></textarea>
    <input type="hidden" name="next" value="/profile/user/teplac" />
    <input type="submit" class="plain-submit" value="Report profile" />
  </form>
</div>
    </div>
      
  
    <h1 id="first-name">
    Tessa
                <span class="fav-form add-fav">

            <form class="favorite" action="/favorites/add" method="POST">
    <div style='display:none'><input type='hidden' name='csrfmiddlewaretoken' value='f9ab4408c239e651ac85bee6bdd0f906' /></div>
    <input type="hidden" name="username" value="teplac"/>
    <input class="add" type="submit" name="add" value="Add to favorites" title="Add to favorites"/>
  </form>
      </span>
      <span class="fav-form rem-fav" style="display:none">
            <form class="favorite" action="/favorites/remove" method="POST">
    <div style='display:none'><input type='hidden' name='csrfmiddlewaretoken' value='f9ab4408c239e651ac85bee6bdd0f906' /></div>

    <input type="hidden" name="username" value="teplac"/>
    <input class="remove" type="submit" name="remove" value="Remove from favorites" title="Remove from favorites"/>
  </form>
      </span>
      </h1>
      <h2 id="display-name">:: teplac</h2>
                      <ul class="profile-asl top-metadata">
              <li>23</li>

                    <li>Girl</li>
                    <li>San Jose</li>
          </ul>
  
  <div class="modal off" id="fav-modal">
    <a href="#" class="close">Close</a>
    <h1>Reached favorites limit.</h1>
    <p>You can only add up to 6 favorites at this time. You may wish to remove someone else from <a href="/favorites/">your list of favorites</a>.</p>

  </div>
    <div id="nav-tabs">
    <ul id="main-tabs">
          <li class="active" title="See what Tessa has to say about him/herself">
        <a href="/profile/user/teplac">About</a>
      </li>
          <li title="Take Tessa&#39;s quiz!">
        <a href="/quizzes/user/teplac">Quiz</a>

      </li>
          <li class="off" title="Coming soon - Read Tessa&#39;s diary.">
        <a href="#">Diary</a>
      </li>
          <li class="off" title="Coming soon - check out Tessa&#39;s introductory video!">
        <a href="#">Video</a>
      </li>
          <li class="off" title="">

        <a href="#">Miniroom</a>
      </li>
        </ul>
        <div id="ipm-bar">
                  <div class="bar">
        <div class="progress" style="width:10%"></div>
      </div>
      <p>interpersonal mojo <span>10%</span></p>

    </div>
  
  </div>
    
    <section id="bio" class="textedit">
    <h1>About me…</h1>
        <div class="inplace-text"><p>I like to think of myself as fun and easy going. But to figure out what I am really like you would just have to meet me, wouldn't you?</p></div>
    <div class="fallback-text off">
      <p class="no-text">Tessa hasn't filled out their bio yet.</p>

    </div>
      </section>

  <section id="ideal-date" class="textedit">
    <h1>My ideal date…</h1>
    <div class="inplace-text"><p>Are we talking about the event or the person here? Well, since it's my choice...<br/>The Person: someone easy to be around, who is good at picking up the conversation when I run out of things to say. But don't we all feel that way...<br/>The Date: as long as it is with the aforementioned person I guess it doesn't really matter. If it not with said perfect conversationalist then something that provides distractions so you can have time to think of something to say. Like going to the zoo or what have you.</p></div>
    <div class="fallback-text off">

      <p class="no-text">Tessa hasn't filled out their first date preference yet.</p>
    </div>
      </section>

  <section id="plans" class="textedit">
    <h1>My dreams, passions &amp; goals…</h1>
    <div class="inplace-text"><p>See "7 things I would bring with me on a deserted island..."</p></div>

    <div class="fallback-text off">
      <p class="no-text">Tessa hasn't filled out their goals yet.</p>
    </div>
      </section>

  <section id="wishes" class="textedit">
    <h1>If I had three wishes, I would wish for…</h1>
    <div class="inplace-text"><p>Unlimited wishes.<br/>Super powers... all of them.<br/>And world peace. </p><p>There isn't much else to wish for after that, but I'd like to have those extras just in case.</p></div>

    <div class="fallback-text off">
      <p class="no-text">Tessa hasn't filled out their wishes yet.</p>
    </div>
      </section>

   <section id="memory" class="textedit">
    <h1>My most treasured memory…</h1>
    <div class="inplace-text"><p>Working on it.</p></div>

    <div class="fallback-text off">
      <p class="no-text">Tessa hasn't filled out their treasured memory yet.</p>
    </div>
      </section>

  <section id="on-island" class="textedit">
    <h1>7 things I would bring with me on a deserted island…</h1>
    <div class="inplace-text"><p>rum<br/>food<br/>a friend<br/>cards<br/>music<br/>a hammock<br/>and a speed boat</p></div>

    <div class="fallback-text off">
      <p class="no-text">Tessa hasn't filled out their island list yet.</p>
    </div>
      </section>

  <section id="experience" class="textedit">
    <h1>My favorite music, books, movies, TV shows and activities…</h1>
    <div class="inplace-text"><p>I like fun things. It can be thought provoking and deep so long as it is also fun. Like museums, or Futurama. </p></div>

    <div class="fallback-text off">
      <p class="no-text">Tessa hasn't filled out their favorites yet.</p>
    </div>
      </section>
  <div id="looking-for-modal" class="modal center-modal off" data-overlay="1">
    
<div id="looking-for-macro" class="modal-form profile-section">
  <h1>Looking for...</h1>
  <div class="sub-heading info">SoWink — You definitely won&#39;t find your mom on here!</div>

  <form action="/profile/looking_for" method="POST" data-lookup-zip-url="/json/lookup-zip">
    <div style='display:none'><input type='hidden' name='csrfmiddlewaretoken' value='f9ab4408c239e651ac85bee6bdd0f906' /></div>
    <div id="search-questions">
      <section id="search-interests">
      <div class="form-widget relationship searchform-margin">
        <label for="id_looking_relationship">Looking for</label>
        <ul>
<li><label for="id_looking_relationship_0"><input checked="checked" type="checkbox" name="looking_relationship" value="1" id="id_looking_relationship_0" /> fun events</label></li>

<li><label for="id_looking_relationship_1"><input checked="checked" type="checkbox" name="looking_relationship" value="2" id="id_looking_relationship_1" /> casual dating</label></li>
<li><label for="id_looking_relationship_2"><input checked="checked" type="checkbox" name="looking_relationship" value="3" id="id_looking_relationship_2" /> making new friends</label></li>
<li><label for="id_looking_relationship_3"><input checked="checked" type="checkbox" name="looking_relationship" value="4" id="id_looking_relationship_3" /> a long-term relationship</label></li>
</ul>
      </div>
      <div class="form-widget sex">
        <label for="id_looking_sex">With…</label>

        <select name="looking_sex" id="id_looking_sex">
<option value="">---------</option>
<option value="20">a girl</option>
<option value="10">a guy</option>
<option value="30" selected="selected">a lil&#39; of both</option>
</select>
      </div>
      <div class="form-widget age-range">

        <label for="id_looking_age_min">Ages</label>
        <select name="looking_age_min" id="id_looking_age_min">
<option value="">---------</option>
<option value="18" selected="selected">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>

<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>

<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
</select>
        <span id="id_age_and">to</span>
        <select name="looking_age_max" id="id_looking_age_max">
<option value="">---------</option>
<option value="18">18</option>

<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>

<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35" selected="selected">35</option>
</select>

      </div>
      </section>
      <div class="form-widget country location-margin">
        <label for="id_country">Country</label>
        <select name="country" id="id_country">
<option value="">---------</option>
<option value="AF">Afghanistan</option>
<option value="AX">Åland Islands</option>

<option value="AL">Albania</option>
<option value="DZ">Algeria</option>
<option value="AS">American Samoa</option>
<option value="AD">Andorra</option>
<option value="AO">Angola</option>
<option value="AI">Anguilla</option>
<option value="AQ">Antarctica</option>
<option value="AG">Antigua and Barbuda</option>
<option value="AR">Argentina</option>

<option value="AM">Armenia</option>
<option value="AW">Aruba</option>
<option value="AU">Australia</option>
<option value="AT">Austria</option>
<option value="AZ">Azerbaijan</option>
<option value="BS">Bahamas</option>
<option value="BH">Bahrain</option>
<option value="BD">Bangladesh</option>
<option value="BB">Barbados</option>

<option value="BY">Belarus</option>
<option value="BE">Belgium</option>
<option value="BZ">Belize</option>
<option value="BJ">Benin</option>
<option value="BM">Bermuda</option>
<option value="BT">Bhutan</option>
<option value="BO">Bolivia, Plurinational State of</option>
<option value="BA">Bosnia and Herzegovina</option>
<option value="BW">Botswana</option>

<option value="BV">Bouvet Island</option>
<option value="BR">Brazil</option>
<option value="IO">British Indian Ocean Territory</option>
<option value="BN">Brunei Darussalam</option>
<option value="BG">Bulgaria</option>
<option value="BF">Burkina Faso</option>
<option value="BI">Burundi</option>
<option value="KH">Cambodia</option>
<option value="CM">Cameroon</option>

<option value="CA">Canada</option>
<option value="CV">Cape Verde</option>
<option value="KY">Cayman Islands</option>
<option value="CF">Central African Republic</option>
<option value="TD">Chad</option>
<option value="CL">Chile</option>
<option value="CN">China</option>
<option value="CX">Christmas Island</option>
<option value="CC">Cocos (Keeling) Islands</option>

<option value="CO">Colombia</option>
<option value="KM">Comoros</option>
<option value="CG">Congo</option>
<option value="CD">Congo, The Democratic Republic of the</option>
<option value="CK">Cook Islands</option>
<option value="CR">Costa Rica</option>
<option value="CI">Côte d&#39;Ivoire</option>
<option value="HR">Croatia</option>

<option value="CU">Cuba</option>
<option value="CY">Cyprus</option>
<option value="CZ">Czech Republic</option>
<option value="DK">Denmark</option>
<option value="DJ">Djibouti</option>
<option value="DM">Dominica</option>
<option value="DO">Dominican Republic</option>
<option value="EC">Ecuador</option>
<option value="EG">Egypt</option>

<option value="SV">El Salvador</option>
<option value="GQ">Equatorial Guinea</option>
<option value="ER">Eritrea</option>
<option value="EE">Estonia</option>
<option value="ET">Ethiopia</option>
<option value="FK">Falkland Islands (Malvinas)</option>
<option value="FO">Faroe Islands</option>
<option value="FJ">Fiji</option>
<option value="FI">Finland</option>

<option value="FR">France</option>
<option value="GF">French Guiana</option>
<option value="PF">French Polynesia</option>
<option value="TF">French Southern Territories</option>
<option value="GA">Gabon</option>
<option value="GM">Gambia</option>
<option value="GE">Georgia</option>
<option value="DE">Germany</option>
<option value="GH">Ghana</option>

<option value="GI">Gibraltar</option>
<option value="GR">Greece</option>
<option value="GL">Greenland</option>
<option value="GD">Grenada</option>
<option value="GP">Guadeloupe</option>
<option value="GU">Guam</option>
<option value="GT">Guatemala</option>
<option value="GG">Guernsey</option>
<option value="GN">Guinea</option>

<option value="GW">Guinea-Bissau</option>
<option value="GY">Guyana</option>
<option value="HT">Haiti</option>
<option value="HM">Heard Island and McDonald Islands</option>
<option value="VA">Holy See (Vatican City State)</option>
<option value="HN">Honduras</option>
<option value="HK">Hong Kong</option>
<option value="HU">Hungary</option>
<option value="IS">Iceland</option>

<option value="IN">India</option>
<option value="ID">Indonesia</option>
<option value="IR">Iran, Islamic Republic of</option>
<option value="IQ">Iraq</option>
<option value="IE">Ireland</option>
<option value="IM">Isle of Man</option>
<option value="IL">Israel</option>
<option value="IT">Italy</option>
<option value="JM">Jamaica</option>

<option value="JP">Japan</option>
<option value="JE">Jersey</option>
<option value="JO">Jordan</option>
<option value="KZ">Kazakhstan</option>
<option value="KE">Kenya</option>
<option value="KI">Kiribati</option>
<option value="KP">Korea, Democratic People&#39;s Republic of</option>
<option value="KR">Korea, Republic of</option>

<option value="KW">Kuwait</option>
<option value="KG">Kyrgyzstan</option>
<option value="LA">Lao People&#39;s Democratic Republic</option>
<option value="LV">Latvia</option>
<option value="LB">Lebanon</option>
<option value="LS">Lesotho</option>
<option value="LR">Liberia</option>
<option value="LY">Libyan Arab Jamahiriya</option>

<option value="LI">Liechtenstein</option>
<option value="LT">Lithuania</option>
<option value="LU">Luxembourg</option>
<option value="MO">Macao</option>
<option value="MK">Macedonia, The Former Yugoslav Republic of</option>
<option value="MG">Madagascar</option>
<option value="MW">Malawi</option>
<option value="MY">Malaysia</option>
<option value="MV">Maldives</option>

<option value="ML">Mali</option>
<option value="MT">Malta</option>
<option value="MH">Marshall Islands</option>
<option value="MQ">Martinique</option>
<option value="MR">Mauritania</option>
<option value="MU">Mauritius</option>
<option value="YT">Mayotte</option>
<option value="MX">Mexico</option>
<option value="FM">Micronesia, Federated States of</option>

<option value="MD">Moldova, Republic of</option>
<option value="MC">Monaco</option>
<option value="MN">Mongolia</option>
<option value="ME">Montenegro</option>
<option value="MS">Montserrat</option>
<option value="MA">Morocco</option>
<option value="MZ">Mozambique</option>
<option value="MM">Myanmar</option>
<option value="NA">Namibia</option>

<option value="NR">Nauru</option>
<option value="NP">Nepal</option>
<option value="NL">Netherlands</option>
<option value="AN">Netherlands Antilles</option>
<option value="NC">New Caledonia</option>
<option value="NZ">New Zealand</option>
<option value="NI">Nicaragua</option>
<option value="NE">Niger</option>
<option value="NG">Nigeria</option>

<option value="NU">Niue</option>
<option value="NF">Norfolk Island</option>
<option value="MP">Northern Mariana Islands</option>
<option value="NO">Norway</option>
<option value="OM">Oman</option>
<option value="PK">Pakistan</option>
<option value="PW">Palau</option>
<option value="PS">Palestinian Territory, Occupied</option>
<option value="PA">Panama</option>

<option value="PG">Papua New Guinea</option>
<option value="PY">Paraguay</option>
<option value="PE">Peru</option>
<option value="PH">Philippines</option>
<option value="PN">Pitcairn</option>
<option value="PL">Poland</option>
<option value="PT">Portugal</option>
<option value="PR">Puerto Rico</option>
<option value="QA">Qatar</option>

<option value="RE">Réunion</option>
<option value="RO">Romania</option>
<option value="RU">Russian Federation</option>
<option value="RW">Rwanda</option>
<option value="BL">Saint Barthélemy</option>
<option value="SH">Saint Helena, Ascension and Tristan Da Cunha</option>
<option value="KN">Saint Kitts and Nevis</option>
<option value="LC">Saint Lucia</option>
<option value="MF">Saint Martin</option>

<option value="PM">Saint Pierre and Miquelon</option>
<option value="VC">Saint Vincent and the Grenadines</option>
<option value="WS">Samoa</option>
<option value="SM">San Marino</option>
<option value="ST">Sao Tome and Principe</option>
<option value="SA">Saudi Arabia</option>
<option value="SN">Senegal</option>
<option value="RS">Serbia</option>
<option value="SC">Seychelles</option>

<option value="SL">Sierra Leone</option>
<option value="SG">Singapore</option>
<option value="SK">Slovakia</option>
<option value="SI">Slovenia</option>
<option value="SB">Solomon Islands</option>
<option value="SO">Somalia</option>
<option value="ZA">South Africa</option>
<option value="GS">South Georgia and the South Sandwich Islands</option>
<option value="ES">Spain</option>

<option value="LK">Sri Lanka</option>
<option value="SD">Sudan</option>
<option value="SR">Suriname</option>
<option value="SJ">Svalbard and Jan Mayen</option>
<option value="SZ">Swaziland</option>
<option value="SE">Sweden</option>
<option value="CH">Switzerland</option>
<option value="SY">Syrian Arab Republic</option>
<option value="TW">Taiwan</option>

<option value="TJ">Tajikistan</option>
<option value="TZ">Tanzania, United Republic of</option>
<option value="TH">Thailand</option>
<option value="TL">Timor-Leste</option>
<option value="TG">Togo</option>
<option value="TK">Tokelau</option>
<option value="TO">Tonga</option>
<option value="TT">Trinidad and Tobago</option>
<option value="TN">Tunisia</option>

<option value="TR">Turkey</option>
<option value="TM">Turkmenistan</option>
<option value="TC">Turks and Caicos Islands</option>
<option value="TV">Tuvalu</option>
<option value="UG">Uganda</option>
<option value="UA">Ukraine</option>
<option value="AE">United Arab Emirates</option>
<option value="GB">United Kingdom</option>
<option value="US" selected="selected">United States</option>

<option value="UM">United States Minor Outlying Islands</option>
<option value="UY">Uruguay</option>
<option value="UZ">Uzbekistan</option>
<option value="VU">Vanuatu</option>
<option value="VE">Venezuela, Bolivarian Republic of</option>
<option value="VN">Viet Nam</option>
<option value="VG">Virgin Islands, British</option>
<option value="VI">Virgin Islands, U.S.</option>
<option value="WF">Wallis and Futuna</option>

<option value="EH">Western Sahara</option>
<option value="YE">Yemen</option>
<option value="ZM">Zambia</option>
<option value="ZW">Zimbabwe</option>
</select>
      </div>
      <div class="form-widget zip-code">
        <label for="id_zip_code">Zip Code</label>
        <input id="id_zip_code" type="text" name="zip_code" value="95134" maxlength="10" />

      </div>
      <div id="city-state-manual" style="display:none">
        <div class="form-widget city location-margin">
          <label for="id_city">City</label>
          <input id="id_city" type="text" name="city" value="San Jose" maxlength="120" />
          <section id="city-warn-modal" class="modal center-modal off" data-overlay="1">
            <h1>Outside of our locations.</h1>
            <p>              Please note that we are focusing on the United States at the
              moment. Feel free to choose a different location, but be aware that
              the number of members you will find is limited.
            </p>

            <p>              However, we are constantly expanding to more areas &mdash;
              hopefully to yours soon!
            </p>
            <div class="button-area">
              <a class="button submit" href="#">I understand</a>
                          </div>
          </section>
        </div>

        <div class="form-widget state">
          <label for="id_state">State/Province</label>
          <select name="state" id="id_state">
<option value="AL">AL</option>
<option value="AK">AK</option>
<option value="AZ">AZ</option>
<option value="AR">AR</option>
<option value="CA" selected="selected">CA</option>

<option value="CO">CO</option>
<option value="CT">CT</option>
<option value="DE">DE</option>
<option value="DC">DC</option>
<option value="FL">FL</option>
<option value="GA">GA</option>
<option value="HI">HI</option>
<option value="ID">ID</option>
<option value="IL">IL</option>

<option value="IN">IN</option>
<option value="IA">IA</option>
<option value="KS">KS</option>
<option value="KY">KY</option>
<option value="LA">LA</option>
<option value="ME">ME</option>
<option value="MD">MD</option>
<option value="MA">MA</option>
<option value="MI">MI</option>

<option value="MN">MN</option>
<option value="MS">MS</option>
<option value="MO">MO</option>
<option value="MT">MT</option>
<option value="NE">NE</option>
<option value="NV">NV</option>
<option value="NH">NH</option>
<option value="NJ">NJ</option>
<option value="NM">NM</option>

<option value="NY">NY</option>
<option value="NC">NC</option>
<option value="ND">ND</option>
<option value="OH">OH</option>
<option value="OK">OK</option>
<option value="OR">OR</option>
<option value="PA">PA</option>
<option value="RI">RI</option>
<option value="SC">SC</option>

<option value="SD">SD</option>
<option value="TN">TN</option>
<option value="TX">TX</option>
<option value="UT">UT</option>
<option value="VT">VT</option>
<option value="VA">VA</option>
<option value="WA">WA</option>
<option value="WV">WV</option>
<option value="WI">WI</option>

<option value="WY">WY</option>
</select>
          <input type="text" maxlength="120" name="province" id="id_province" value=""/>
        </div>
        <div id="city-state-auto-link">
          Want to have SoWink <a href="#">set your location automatically?</a>
        </div>
      </div>      <div id="city-state-auto">

        <div class="c-info">Your location is set to:</div>
        <div id="city-state-detected">San Jose, CA</div>
        <div id="city-state-manual-link">
          If this is incorrect, <a href="#">set it yourself</a>
        </div>
      </div>
      <div class="button-area">

        <input class="button submit" type="submit" value="submit" name="user">
      </div>
    </div>

  </form>
</div>
  </div>
  <div id="wink-facts-modal" class="modal center-modal off" data-overlay="1">
    <div id="wink-facts-macro" class="modal-form profile-section">
  <h1>My WinkFacts</h1>

  <div class="sub-heading info">Today I don&#39;t feel like doing anything, I just want to fill out my WinkFacts…</div>

  <form action="/profile/wink_facts" method="POST">
    <div class="about-bubble bubble">
      <span class="quote">        Congratulations for making it this far!
        Looks like you're more savvy than the average panda.
        Fill these out to receive maximum visibility!
      </span>
      <div class="pandwink"></div>
    </div>

    <div style='display:none'><input type='hidden' name='csrfmiddlewaretoken' value='f9ab4408c239e651ac85bee6bdd0f906' /></div>
    <div class="form-widget status">
      <label for="id_status">Relationship Status</label>
      <select name="status" id="id_status">
<option value="">---------</option>
<option value="10">Single</option>
<option value="20">Casually dating</option>
<option value="30" selected="selected">In a serious relationship</option>

</select>
    </div>
    <div class="form-widget height">
      <label for="id_height">Height</label>
                                        <select id="id_height_ft" name="height_ft">
          <option value="0">-</option>
                  <option value="3">3'</option>
                  <option value="4">4'</option>

                  <option value="5" selected="selected">5'</option>
                  <option value="6">6'</option>
                  <option value="7">7'</option>
              </select>
      <select id="id_height_in" name="height_in">
          <option value="0">-</option>
                  <option value="0">0"</option>

                  <option value="1">1"</option>
                  <option value="2">2"</option>
                  <option value="3">3"</option>
                  <option value="4">4"</option>
                  <option value="5">5"</option>
                  <option value="6">6"</option>

                  <option value="7">7"</option>
                  <option value="8" selected="selected">8"</option>
                  <option value="9">9"</option>
                  <option value="10">10"</option>
                  <option value="11">11"</option>
              </select>

      <span id="id_height_or">or</span>
      <input type="text" name="height" value="173" id="id_height" />
      <span id="id_height_cm">cm</span>
    </div>
    <div class="form-widget body-type">
      <label for="id_body_type">Body Type</label>
      <select name="body_type" id="id_body_type">

<option value="">---------</option>
<option value="10">Petite</option>
<option value="15">Skinny</option>
<option value="20">Athletic</option>
<option value="30">Average</option>
<option value="35" selected="selected">Voluptuous</option>
<option value="40">More to love</option>
</select>
    </div>

    <div class="form-widget religion">
      <label for="id_religion">Religion</label>
      <select name="religion" id="id_religion">
<option value="">---------</option>
<option value="10">Unspecified</option>
<option value="20" selected="selected">Agnostic</option>
<option value="30">Atheist</option>
<option value="40">Buddhist</option>

<option value="50">Catholic</option>
<option value="60">Christian</option>
<option value="70">Islamic</option>
<option value="80">Jewish</option>
<option value="90">Hindu</option>
</select>
    </div>
    <div class="form-widget profession">
      <label for="id_profession">Profession</label>

      <input id="id_profession" type="text" name="profession" value="unknown" maxlength="100" />
    </div>
    <div class="form-widget education">
      <label for="id_body_type">Education</label>
      <select name="education" id="id_education">
<option value="">---------</option>
<option value="10">High school</option>
<option value="20">Two-year college</option>

<option value="30">College/University</option>
<option value="40">Grad school</option>
<option value="50" selected="selected">Vocational school</option>
</select>
    </div>
    <div class="form-widget drinking">
      <label for="id_drinking">Drinking</label>
      <select name="drinking" id="id_drinking">
<option value="">---------</option>

<option value="10">No</option>
<option value="20">Yes</option>
<option value="30">Occasionally</option>
<option value="40">Socially</option>
<option value="50">Trying to quit</option>
<option value="60" selected="selected">Only when sober</option>
</select>
    </div>
    <div class="form-widget smoking">

      <label for="id_smoking">Smoking</label>
      <select name="smoking" id="id_smoking">
<option value="">---------</option>
<option value="10">No</option>
<option value="20">Yes</option>
<option value="30" selected="selected">Occasionally</option>
<option value="40">Socially</option>
<option value="50">Trying to quit</option>

<option value="60">For medicinal purposes</option>
</select>
    </div>
    <div class="form-widget language">
      <label for="id_smoking">Languages</label>
      <ul>
<li><label for="id_language_0"><input checked="checked" type="checkbox" name="language" value="60" id="id_language_0" /> English</label></li>
<li><label for="id_language_1"><input type="checkbox" name="language" value="76" id="id_language_1" /> Afrikaans</label></li>

<li><label for="id_language_2"><input type="checkbox" name="language" value="97" id="id_language_2" /> Albanian</label></li>
<li><label for="id_language_3"><input type="checkbox" name="language" value="81" id="id_language_3" /> Arabic</label></li>
<li><label for="id_language_4"><input type="checkbox" name="language" value="41" id="id_language_4" /> Armenian</label></li>
<li><label for="id_language_5"><input type="checkbox" name="language" value="22" id="id_language_5" /> Basque</label></li>
<li><label for="id_language_6"><input type="checkbox" name="language" value="32" id="id_language_6" /> Belarusian</label></li>
<li><label for="id_language_7"><input type="checkbox" name="language" value="83" id="id_language_7" /> Bengali (Bangladesh)</label></li>

<li><label for="id_language_8"><input type="checkbox" name="language" value="37" id="id_language_8" /> Bosnian</label></li>
<li><label for="id_language_9"><input type="checkbox" name="language" value="36" id="id_language_9" /> Breton</label></li>
<li><label for="id_language_10"><input type="checkbox" name="language" value="33" id="id_language_10" /> Bulgarian</label></li>
<li><label for="id_language_11"><input type="checkbox" name="language" value="50" id="id_language_11" /> Catalan</label></li>
<li><label for="id_language_12"><input type="checkbox" name="language" value="106" id="id_language_12" /> Chinese (Cantonese)</label></li>
<li><label for="id_language_13"><input type="checkbox" name="language" value="105" id="id_language_13" /> Chinese (Mandarin)</label></li>

<li><label for="id_language_14"><input type="checkbox" name="language" value="59" id="id_language_14" /> Croatian</label></li>
<li><label for="id_language_15"><input type="checkbox" name="language" value="53" id="id_language_15" /> Czech</label></li>
<li><label for="id_language_16"><input type="checkbox" name="language" value="14" id="id_language_16" /> Danish</label></li>
<li><label for="id_language_17"><input type="checkbox" name="language" value="86" id="id_language_17" /> Dutch</label></li>
<li><label for="id_language_18"><input type="checkbox" name="language" value="23" id="id_language_18" /> Estonian</label></li>
<li><label for="id_language_19"><input type="checkbox" name="language" value="91" id="id_language_19" /> Farsi</label></li>

<li><label for="id_language_20"><input type="checkbox" name="language" value="93" id="id_language_20" /> Finnish</label></li>
<li><label for="id_language_21"><input type="checkbox" name="language" value="90" id="id_language_21" /> French</label></li>
<li><label for="id_language_22"><input type="checkbox" name="language" value="45" id="id_language_22" /> Frisian</label></li>
<li><label for="id_language_23"><input type="checkbox" name="language" value="3" id="id_language_23" /> Galician</label></li>
<li><label for="id_language_24"><input type="checkbox" name="language" value="94" id="id_language_24" /> Georgian</label></li>
<li><label for="id_language_25"><input type="checkbox" name="language" value="13" id="id_language_25" /> German</label></li>

<li><label for="id_language_26"><input type="checkbox" name="language" value="20" id="id_language_26" /> Greek</label></li>
<li><label for="id_language_27"><input type="checkbox" name="language" value="63" id="id_language_27" /> Hebrew</label></li>
<li><label for="id_language_28"><input type="checkbox" name="language" value="62" id="id_language_28" /> Hindi</label></li>
<li><label for="id_language_29"><input type="checkbox" name="language" value="61" id="id_language_29" /> Hungarian</label></li>
<li><label for="id_language_30"><input type="checkbox" name="language" value="57" id="id_language_30" /> Icelandic</label></li>
<li><label for="id_language_31"><input type="checkbox" name="language" value="85" id="id_language_31" /> Indonesian</label></li>

<li><label for="id_language_32"><input type="checkbox" name="language" value="19" id="id_language_32" /> Irish (Ireland)</label></li>
<li><label for="id_language_33"><input type="checkbox" name="language" value="79" id="id_language_33" /> Italian</label></li>
<li><label for="id_language_34"><input type="checkbox" name="language" value="39" id="id_language_34" /> Japanese</label></li>
<li><label for="id_language_35"><input type="checkbox" name="language" value="95" id="id_language_35" /> Kazakh</label></li>
<li><label for="id_language_36"><input type="checkbox" name="language" value="98" id="id_language_36" /> Korean</label></li>
<li><label for="id_language_37"><input type="checkbox" name="language" value="54" id="id_language_37" /> Latvian</label></li>

<li><label for="id_language_38"><input type="checkbox" name="language" value="8" id="id_language_38" /> Lithuanian</label></li>
<li><label for="id_language_39"><input type="checkbox" name="language" value="69" id="id_language_39" /> Macedonian</label></li>
<li><label for="id_language_40"><input type="checkbox" name="language" value="72" id="id_language_40" /> Malay</label></li>
<li><label for="id_language_41"><input type="checkbox" name="language" value="68" id="id_language_41" /> Maori (Aotearoa)</label></li>
<li><label for="id_language_42"><input type="checkbox" name="language" value="67" id="id_language_42" /> Mongolian</label></li>
<li><label for="id_language_43"><input type="checkbox" name="language" value="4" id="id_language_43" /> Nepali</label></li>

<li><label for="id_language_44"><input type="checkbox" name="language" value="87" id="id_language_44" /> Norwegian (Nynorsk)</label></li>
<li><label for="id_language_45"><input type="checkbox" name="language" value="44" id="id_language_45" /> Occitan (Lengadocian)</label></li>
<li><label for="id_language_46"><input type="checkbox" name="language" value="58" id="id_language_46" /> Polish</label></li>
<li><label for="id_language_47"><input type="checkbox" name="language" value="1" id="id_language_47" /> Punjabi</label></li>
<li><label for="id_language_48"><input type="checkbox" name="language" value="29" id="id_language_48" /> Romanian</label></li>
<li><label for="id_language_49"><input type="checkbox" name="language" value="25" id="id_language_49" /> Russian</label></li>

<li><label for="id_language_50"><input type="checkbox" name="language" value="82" id="id_language_50" /> Serbian</label></li>
<li><label for="id_language_51"><input type="checkbox" name="language" value="101" id="id_language_51" /> Slovak</label></li>
<li><label for="id_language_52"><input type="checkbox" name="language" value="104" id="id_language_52" /> Slovenian</label></li>
<li><label for="id_language_53"><input type="checkbox" name="language" value="24" id="id_language_53" /> Spanish</label></li>
<li><label for="id_language_54"><input type="checkbox" name="language" value="84" id="id_language_54" /> Swedish</label></li>
<li><label for="id_language_55"><input type="checkbox" name="language" value="11" id="id_language_55" /> Tamil</label></li>

<li><label for="id_language_56"><input type="checkbox" name="language" value="9" id="id_language_56" /> Thai</label></li>
<li><label for="id_language_57"><input type="checkbox" name="language" value="5" id="id_language_57" /> Turkish</label></li>
<li><label for="id_language_58"><input type="checkbox" name="language" value="34" id="id_language_58" /> Ukrainian</label></li>
<li><label for="id_language_59"><input type="checkbox" name="language" value="70" id="id_language_59" /> Urdu</label></li>
<li><label for="id_language_60"><input type="checkbox" name="language" value="77" id="id_language_60" /> Vietnamese</label></li>
</ul>
    </div>

    <div class="form-widget ethnicity">
      <label for="id_ethnicity">Ethnicities</label>
      <ul>
<li><label for="id_ethnicity_0"><input checked="checked" type="checkbox" name="ethnicity" value="3" id="id_ethnicity_0" /> White</label></li>
<li><label for="id_ethnicity_1"><input type="checkbox" name="ethnicity" value="6" id="id_ethnicity_1" /> Black</label></li>
<li><label for="id_ethnicity_2"><input type="checkbox" name="ethnicity" value="9" id="id_ethnicity_2" /> Asian</label></li>
<li><label for="id_ethnicity_3"><input type="checkbox" name="ethnicity" value="2" id="id_ethnicity_3" /> Indian</label></li>

<li><label for="id_ethnicity_4"><input type="checkbox" name="ethnicity" value="5" id="id_ethnicity_4" /> Hispanic</label></li>
<li><label for="id_ethnicity_5"><input type="checkbox" name="ethnicity" value="8" id="id_ethnicity_5" /> Pacific Islander</label></li>
<li><label for="id_ethnicity_6"><input type="checkbox" name="ethnicity" value="1" id="id_ethnicity_6" /> Middle Eastern</label></li>
<li><label for="id_ethnicity_7"><input type="checkbox" name="ethnicity" value="4" id="id_ethnicity_7" /> Native American</label></li>
<li><label for="id_ethnicity_8"><input type="checkbox" name="ethnicity" value="7" id="id_ethnicity_8" /> I&#39;m a Mutt</label></li>
</ul>

    </div>

    <div class="button-area">
      <input class="button" type="submit" name="user" value="submit" />
    </div>
  </form>
</div>
  </div>
        <div class="clear"></div>
      </section>

                                            <div id="account-info-modal" class="modal center-modal  off" data-overlay="1">
          
<div id="account-info-macro" class="modal-form profile-section">
  <h1>Account Information</h1>
  <div class="sub-heading info">Dr. Pengwink needs your 411 to hook you up!</div>
  
  <div class="about-bubble peng-bubble"> </div>
  <form action="/profile/account_info" method="POST">
    <div style='display:none'><input type='hidden' name='csrfmiddlewaretoken' value='f9ab4408c239e651ac85bee6bdd0f906' /></div>

    
    <div class="left-side account-info-div">
      <div class="form-widget">
        <label for="id_username">Username</label>
        <input type="text" name="p_username" disabled="disabled" value="dtonys" id="id_username"/>
      </div>

      <div class="form-widget">
        <label for="id_f_password">Password</label>

        <input type="password" name="f_password" value="" id="id_f_password"/>
      </div>
    </div>    <div class="right-side account-info-div">
      <div class="form-widget">
        <label for="id_first_name">First Name</label>
        <input type="text" name="first_name" value="Tony" id="id_first_name"/>
      </div>

      <div class="form-widget">
        <label for="id_last_name">Last Name</label>
        <input type="text" name="last_name" value="Schwartz" id="id_last_name"/>
        <span class="info">(not displayed)</span>
      </div>
    </div>    <br />
    <div id="birthday" class="form-widget account-info-div">

      <label for="id_birthday_year">Birthday</label>
      <select name="birthday_month" id="id_birthday_month">
<option value="None">----</option>
<option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>

<option value="6">June</option>
<option value="7">July</option>
<option value="8">August</option>
<option value="9">September</option>
<option value="10">October</option>
<option value="11" selected="selected">November</option>
<option value="12">December</option>
</select>
      <select name="birthday_day" id="id_birthday_day">

<option value="None">--</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>

<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13" selected="selected">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>

<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>

<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
      <select name="birthday_year" id="id_birthday_year">
<option value="None">----</option>
<option value="1976">1976</option>

<option value="1977">1977</option>
<option value="1978">1978</option>
<option value="1979">1979</option>
<option value="1980">1980</option>
<option value="1981">1981</option>
<option value="1982">1982</option>
<option value="1983">1983</option>
<option value="1984">1984</option>
<option value="1985">1985</option>

<option value="1986">1986</option>
<option value="1987">1987</option>
<option value="1988" selected="selected">1988</option>
<option value="1989">1989</option>
<option value="1990">1990</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
</select>
    </div>

    <div class="form-widget account-info-div">
      <label for="id_gender">I&#39;m a…</label>
      <select name="gender" id="id_gender">
<option value="None">----</option>
<option value="20">Girl</option>
<option value="10" selected="selected">Guy</option>
</select>
    </div>

          <div id="profile-phone" class="form-widget account-info-div">
        <label for="id_phone">Phone Number</label>
        <input type="text" name="phone" id="id_phone" />
      </div>
      <div class="form-widget account-info-div">
        <label for="id_carrier">Phone Carrier</label>
        <select name="carrier" id="id_carrier">
<option value="100">Alltel</option>

<option value="200">AT&amp;T</option>
<option value="250">Bell Canada</option>
<option value="300">Boost Mobile</option>
<option value="400">Credo</option>
<option value="500">Metro PCS</option>
<option value="600">Sprint</option>
<option value="700">T-Mobile</option>
<option value="800">Telus</option>

<option value="900">U.S. Cellular</option>
<option value="1000">Verizon</option>
<option value="1100">Virgin Mobile USA</option>
</select>
      </div>
        <div class="form-widget submit">
            <input class="button" type="submit" name="save_basic" title="save and continue" value="submit" />
    </div>
  </form>

</div>
        </div>
        <a style="display:none" class="modal-form-trigger" id="mobile-verify-trigger" data-for-modal="mobile-verify-modal" href="#">Mobile verification</a>
        <div id="mobile-verify-modal" class="modal center-modal  off" data-overlay="1">
                              
<div id="mobile-verify-macro" class="modal-form profile-section">
  <div class="step step-1" data-step=1>
    <h1>Mobile Verification</h1>
    <div class="sub-heading info">

      <p>        In order to interact with other people on our site, we need to <strong>verify that you are a real person.</strong>
        Please tell Dr. Pengwink <strong>your phone number</strong> so he can make sure you're not just part of his imagination.
      </p>
    </div>

    <h2>Step 1 - Enter Mobile Phone Number and Select Carrier</h2>

    <div class="sub-heading info">Enter your phone number below and we&#39;ll send you a text message with a verification code. It may take up to a few minutes for the message to deliver. <span>Standard rates may apply.</span></div>
    <form action="/profile/mobile_change" method="POST">
      <div style='display:none'><input type='hidden' name='csrfmiddlewaretoken' value='f9ab4408c239e651ac85bee6bdd0f906' /></div>
      
      <div class="form-widget phone">
        <label for="id_phone">Phone Number</label>
        <input type="text" name="phone" id="id_phone" />
      </div>

      <div class="form-widget carrier">
        <label for="id_carrier">Carrier</label>
        <select name="carrier" id="id_carrier">
<option value="100">Alltel</option>
<option value="200">AT&amp;T</option>
<option value="250">Bell Canada</option>
<option value="300">Boost Mobile</option>
<option value="400">Credo</option>

<option value="500">Metro PCS</option>
<option value="600">Sprint</option>
<option value="700">T-Mobile</option>
<option value="800">Telus</option>
<option value="900">U.S. Cellular</option>
<option value="1000">Verizon</option>
<option value="1100">Virgin Mobile USA</option>
</select>
      </div>

      <div class="form-widget submit">
        <input class="button" type="submit" name="save_basic" title="send verification code" value="send verification code" />
      </div>
    </form>
    <h2 class="disabled">Step 2 - Enter Verification Code »</h2>
  </div>
  <div class="step step-2" data-step=2 style="display:none">
    <h1>Mobile Verification</h1>

    <div class="sub-heading info">
      Code sent to:
        <span class="phone-number"></span>
    </div>
    <a href="#" class="resend">
    <h2 class="complete">Step 1 - Enter Mobile Phone Number and Select Carrier «</h2>
    <div class="sub-heading info disabled">Complete!</div></a>
    <h2>Step 2 - Enter Verification Code</h2>

    <div class="sub-heading info no-border">Check your phone. You should receive a verification code to the number you entered on Step 1. It may take a few minutes for the message to deliver, but if you still do not receive a message, <a href="#" class="resend">go back to Step 1</a>.</div>
    <form action="/profile/verify_code" method="POST">
      <div style='display:none'><input type='hidden' name='csrfmiddlewaretoken' value='f9ab4408c239e651ac85bee6bdd0f906' /></div>
      
      <div class="form-widget code">
        <label for="id_code">Verification Code</label>
        <input type="text" name="code" value="" />
        <input class="button" type="submit" name="save_basic" title="verify account" value="verify account" />

      </div>
    </form>
  </div>

  </form>
</div>
        </div>
                                          <div id="overlay" class="off"></div>
              <div class="clear"></div>
  </div>

</div>

<footer role="contentinfo">
    <div id="footer-content">
        <ul id="company-links">
            <li><a href="http://blog.sowink.com/about/" title="About SoWink">About</a></li>
            <li><a href="http://blog.sowink.com/team" title="Meet the team behind SoWink">Team</a></li>
            <li><a href="http://blog.sowink.com/jobs" title="Be a part of the next generation dating website">Jobs</a></li>
            <li><a href="/terms" title="Terms of Service">Terms of Service</a></li>

            <li><a href="/privacy" title="Dr. Pengwink has got your back">Privacy Policy</a></li>
            <li><a href="/faq" title="Lost? Find help here">FAQ</a></li>
            <li><a href="http://blog.sowink.com/contactus" title="Drop us a line">Contact Us</a></li>
        </ul>
        <ul id="social-links">
            <li><a href="http://facebook.com/sowink" title="Like our page">Facebook</a></li>
            <li><a href="http://twitter.com/SoWink_Inc" title="Follow us">Twitter</a></li>

            <li><a href="http://foursquare.com/sowink_inc" title="Foursquare">Foursquare</a></li>
            <li><a href="http://blog.sowink.com" title="Read our blog">Blog</a></li>
        </ul>
        <div id="copyright">
    Copyright &copy; 2011 <a href="/home">SoWink, Inc.</a> All rights reserved.</div>

    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="http://localhost/HTMLstuff/AJAX/Like Button/likepopup.js"></script>  
<script src="http://ec2-50-18-184-255.us-west-1.compute.amazonaws.com/media/js/common-min.js?build=de28549"></script>
  <script src="http://ec2-50-18-184-255.us-west-1.compute.amazonaws.com/media/js/loggedin-min.js?build=de28549"></script>
<script src="http://ec2-50-18-184-255.us-west-1.compute.amazonaws.com/media/js/users-min.js?build=de28549"></script>
  
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21374002-1']);
  _gaq.push(['_setDomainName', '.sowink.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<script type="text/javascript">
  (function() {
    var uv = document.createElement('script'); uv.type = 'text/javascript'; uv.async = true;
    uv.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'widget.uservoice.com/JsgqhjpOl5nOnl6XaesOTQ.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(uv, s);
  })();

</script>
<div id="feed-invite">
  <a id="uservoice" href="javascript:UserVoice.showPopupWidget();" title="feedback">feedback</a>
    <a id="invite-friends" href="/invites" title="Invite your friends to receive rewards!"><span></span>Invites your friends!</a>
  </div>

<div id="chat-off">
  <a href="http://blog.sowink.com/category/status/" target="_blank">
  <div class="chat-titlebar">
    <span class="chat-icon"></span>

    <span class="chat-status" title="SoWink is currently experiencing technical difficulties with the Chat service.">OFF
    </span>
  </div>
  </a>
</div>

<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
  {parsetags: 'explicit'}
</script>

</body>
</html>