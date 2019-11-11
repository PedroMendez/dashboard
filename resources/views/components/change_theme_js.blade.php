<script>
    document.getElementById("whiteBadge").addEventListener("click", clickToWhite);

    document.getElementById("blackBadge").addEventListener("click", clickToBlack);

    function clickToWhite() {
        document.getElementById("mainBody").classList.add("white-content");
    }

    function clickToBlack() {
        document.getElementById("mainBody").classList.remove("white-content");
    }  
</script>