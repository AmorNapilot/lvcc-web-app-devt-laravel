<!DOCTYPE html>
<html>
<head>
    <title>Packages</title>
</head>
<body>


<h1>
Setzen Sie auf zusätzliche Funktionalität und Produktivität
</h1>
<p>
Mit bmgenerator Premium erhalten Sie neben den regulären bmgenerator-Funktionen zudem ... 
</p>

<ul>
    <li>
        Eigene Mustersätze und Musterbriefe anlegen und durchsuchen
    </li>
    <li>
        Eigene Mustersätze und Musterbriefe bearbeiten
    </li>
    <li>
        Prioritäre Kundenbetreuung
    </li>
</ul>

<h1>
    Version wechseln / Premium aktvieren 
    <small>
        1/2
    </small>
</h1>

<div>
    12,99 € / Jahr (14 % Einsparung!)
    (Sie abonnieren 24 Monate)
    <button class="select-package" data-price="12.99">Jetzt buchen</button>
</div>

<div>
    15,99 € / Jahr
    (Sie abonnieren 12 Monate)
    <button class="select-package" data-price="15.99">Jetzt buchen</button>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    console.log('Ready');
    $('.select-package').on('click', function() {
        var price = $(this).data('price');
        alert(price);
    });
});
</script>


</body>
</html>