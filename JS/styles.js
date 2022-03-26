$("document").ready(function(){

    $("#salaryP").hide();
    $("#CreateP").hide();
    $("#users").hide();
    $("#EditP").hide();

    $('#mPaym').click(function(){
        $('#homeP').hide();
        $('#salaryP').show();
        $('#CreateP').hide();
        $('#users').hide();
        $('#EditP').hide();
    });

    $('#cr8U').click(function(){
        $('#homeP').hide();
        $('#salaryP').hide();
        $('#CreateP').show();
        $('#users').hide();
        $('#EditP').hide();
    });

    $('#vieUse').click(function(){
        $('#homeP').hide();
        $('#salaryP').hide();
        $('#CreateP').hide();
        $('#users').show();
        $('#EditP').hide();
    });

    $('#edAcc').click(function(){
        $('#homeP').hide();
        $('#salaryP').hide();
        $('#CreateP').hide();
        $('#users').hide();
        $('#EditP').show();
    });
});

// mPaym cr8U vieUse edAcc