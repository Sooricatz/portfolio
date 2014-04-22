document.addEventListener('DOMContentLoaded', function() {

    [].forEach.call(document.getElementsByClassName('toggle-about'), function(el) {
        el.addEventListener('click',function(e) {
            e.preventDefault();
            document.getElementById('about-box').classList.toggle("active");
            document.documentElement.classList.toggle("inactive");
        })
    })
})