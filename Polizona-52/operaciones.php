<html>
<body>
<h2>calcular valor total del inventario. sumatoria de cantidad por costo unitario</h2>

<p id="demo"></p>

<script>var actual1 =0;
var text = '{"actual":"function() {for( i in obj.inventario){ actual1 += +(obj.inventario[i].embarque.cantidad*obj.inventario[i].embarque.costounitario)}return actual1;}","inventario":[{"embarque":{"cantidad":2,"costounitario":10}},{"embarque":{"cantidad":2,"costounitario":1}},{"embarque":{"cantidad":2,"costounitario":4}},{"embarque":{"cantidad":3,"costounitario":2}},{"embarque":{"cantidad":2,"costounitario":2}}]}';
//var text = '{"actual":"function() {for( i in obj.costoembarque){ actual1 += +(obj.inventario[i].costo.unitario*obj.inventario[i].embarque.costounitario)}return actual1;}","inventario":[{"embarque":{"cantidad":2,"costounitario":10}},{"embarque":{"cantidad":2,"costounitario":1}},{"embarque":{"cantidad":2,"costounitario":4}},{"embarque":{"cantidad":3,"costounitario":2}},{"embarque":{"cantidad":2,"costounitario":2}}]}';
//var text = '{"actual":"function() {for( i in obj.inventario){ actual1 += +(obj.inventario[i].embarque.cantidad*obj.inventario[i].embarque.costounitario)}return actual1;}","inventario":[{"embarque":{"cantidad":2,"costounitario":10}},{"embarque":{"cantidad":2,"costounitario":1}},{"embarque":{"cantidad":2,"costounitario":4}},{"embarque":{"cantidad":3,"costounitario":2}},{"embarque":{"cantidad":2,"costounitario":2}}]}';
var obj = JSON.parse(text);
obj.actual = eval("(" + obj.actual + ")");
document.getElementById("demo").innerHTML = obj.actual();
</script>

</body>
</html>