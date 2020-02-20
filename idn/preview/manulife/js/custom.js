// js is active

$(".answ").click(function (e) {
    $(this).addClass("selected").siblings().removeClass("selected");
});

$('.radio').change(function(){
    $('.next-btn').removeAttr('disabled');
});


// quiz

      function checkTest() {
            var a1 = 0;
            var a2 = 0;
            var a3 = 0;
            var a4 = 0;

    if ($('input[type="radio"][name=Q1]:checked').val() == "A1") {
        a1++;
    }
    if ($('input[type="radio"][name=Q2]:checked').val() == "A1") {
        a1++;
    }
    if ($('input[type="radio"][name=Q3]:checked').val() == "A1") {
        a1++;
    }
    if ($('input[type="radio"][name=Q4]:checked').val() == "A1") {
        a1++;
    }
    if ($('input[type="radio"][name=Q5]:checked').val() == "A1") {
        a1++;
    }
    if ($('input[type="radio"][name=Q1]:checked').val() == "A2") {
        a2++;
    }
    if ($('input[type="radio"][name=Q2]:checked').val() == "A2") {
        a2++;
    }
    if ($('input[type="radio"][name=Q3]:checked').val() == "A2") {
        a2++;
    }
    if ($('input[type="radio"][name=Q4]:checked').val() == "A2") {
        a2++;
    }
    if ($('input[type="radio"][name=Q5]:checked').val() == "A2") {
        a2++;
    }
    if ($('input[type="radio"][name=Q1]:checked').val() == "A3") {
        a3++;
    }
    if ($('input[type="radio"][name=Q2]:checked').val() == "A3") {
        a3++;
    }
    if ($('input[type="radio"][name=Q3]:checked').val() == "A3") {
        a3++;
    }
    if ($('input[type="radio"][name=Q4]:checked').val() == "A3") {
        a3++;
    }
    if ($('input[type="radio"][name=Q5]:checked').val() == "A3") {
        a3++;
    }
    if ($('input[type="radio"][name=Q1]:checked').val() == "A4") {
        a4++;
    }
    if ($('input[type="radio"][name=Q2]:checked').val() == "A4") {
        a4++;
    }
    if ($('input[type="radio"][name=Q3]:checked').val() == "A4") {
        a4++;
    }
    if ($('input[type="radio"][name=Q4]:checked').val() == "A4") {
        a4++;
    }
    if ($('input[type="radio"][name=Q5]:checked').val() == "A4") {
        a4++;
    }
    if (a1 > a2 && a1 > a3 && a1 > a4) {
        window.location.href = 'result-adventurer.html';
    } 
     else if (a2 > a1 && a2 > a3 && a2 > a4) {
        window.location.href = 'result-visionary.html';
    }
    else if (a3 > a1 && a3 > a2 && a3 > a4) {
        window.location.href = 'result-leader.html';
    }
    else if (a4 > a1 && a4 > a2 && a4 > a3) {
        window.location.href = 'result-collabolator.html';
    }
     else {
        alert("You answered too many questions incorrectly. Try again.");
    }
}