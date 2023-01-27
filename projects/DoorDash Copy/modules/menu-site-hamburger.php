<!-- from https://codepen.io/erikterwan/pen/EVzeRP -->

<nav role="navigation" class="hamburger-site-menu">

    <div id="menuToggle">
    
        <!-- A fake / hidden checkbox is used as click reciever, so you can use the :checked selector on it. -->
        <input type="checkbox" />
        
        <!-- Some spans to act as a hamburger. They are acting like a real hamburger, not that McDonalds stuff. -->
        <span></span>
        <span></span>
        <span></span>
        
        <!-- Too bad the menu has to be inside of the button but hey, it's pure CSS magic. -->
        <ul id="menu">
        
            <?php include("menu-site-links.php"); ?>
        </ul>
    </div>
</nav>