// JavaScript Document

var x;
x= $(document);
x.ready(iniciar);

function iniciar()
{
	//alert("hola");

	$('li').click(
		function ()
		{
        var url = $(this).attr('rel');
        $('#iframe').attr('src', url);
        $('#iframe').reload();
    	});

}