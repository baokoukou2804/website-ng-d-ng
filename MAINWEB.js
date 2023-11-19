  // Function to open the side navigation
  function openNav() {
    document.getElementById("mysidenav").style.width = "250px";
}

  // Function to close the side navigation
  function closeNav() {
    document.getElementById("mysidenav").style.width = "0";
}

document.addEventListener("DOMContentLoaded", function() {
    var myList = document.getElementById("menu");

    myList.addEventListener("click", function(e) {
        e.preventDefault();

        // Get the target section id from the href attribute
        var targetId = e.target.getAttribute("href").substring(1);

        // Scroll to the target section
        document.getElementById(targetId).scrollIntoView({
            behavior: "smooth"
        });
    });
});

