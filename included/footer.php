
    <div id="contact" class="right-container">
        <div class="contact-inner">
            <h2>Get in touch</h2>
    		<p>I'm always thrilled to meet new people, motivated by crafting better products together.</p>
            <p>Keep me posted, if it sounds like a fit.</p>
            <a href="mailto:guillaume.mutschler@gmail.com" target="_blank" class="contact-email">guillaume.mutschler@gmail.com</a>
        </div>
    </div>
</div><!--end main-->

<div id="footer">
    <div id="colophon">©<span datetime="2013">2014</span> Guillaume Mutschler</div>
    <div id="social-links">
        <a href="mailto:guillaume.mutschler@gmail.com" class="socialbtn mailbtn" target="_blank"><span></span></a>
        <a href="http://de.linkedin.com/in/guillaumemutschler" class="socialbtn linkedinbtn"><span></span></a>
    </div>
</div>

</div> 

<div id="about-box">
    <div class="about-box-container">  
        <div class="about-box-inner">
            <div id="about-box-content">
                <div class="close"><a href="#" class="toggle-about">&#9747 Close</a></div>
                <p>Graduate from a French <a href="http://en.wikipedia.org/wiki/Grande_ecole">Grande Ecole</a> in Mechanical Engineering and Design with majors in Ergonomic and Human Computer Interactions, I provide intuitive product definition and execution with emphasis on the technical and functional, while taking in account ergonomics, cognition as well as industry and societal constraints.</p>
                <p>I had the the opportunity and chance to work either for big corporations and smaller ventures. It teaches me how to be flexible in a teamwork situation and that compromises and decisions making are definitive an added values.</p>
                <p>You can learn more about my experiences on my <a href="http://www.linkedin.com/profile/view?id=43708188">Linkedin profile</a>.</p>
            </div>
        </div>
    </div> 
</div>

<!--<script src="/js/script.js"></script>-->
<script>
document.addEventListener('DOMContentLoaded', function() {

    [].forEach.call(document.getElementsByClassName('toggle-about'), function(el) {
        el.addEventListener('click',function(e) {
            e.preventDefault();
            document.documentElement.classList.toggle("inactive");
            document.getElementById('about-box').classList.toggle("active");
        })
    })
})
</script>

<!--[if lt IE 7 ]>
<script src="js/dd_belatedpng.js"></script>
<script> DD_belatedPNG.fix('img, .png_bg');</script>
<![endif]-->
</body>
</html>