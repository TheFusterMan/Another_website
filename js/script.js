document.getElementById('togglebutton').addEventListener("click", function() {
    var extraImage = document.getElementById('extrapage')

    if (extraImage.style.display === 'none') {
        extraImage.style.display = 'block';
        this.textContent = 'Close';
    } 
    else {
        extraImage.style.display = 'none';
        this.textContent = 'Open'
    }
})