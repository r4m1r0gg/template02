# template02
arranque rapído con custom-tag dinamico
<pre>
en esta ocacion el tamplate tambien se puede modificar creando 
custom tags asi como se crea la custom-tag con cmet 
tenemos la funcion dcmet (dinamic custom element)
y esta funcion funciona practicamente igual que la anterior
con el detalle que nos permite crear el tag con el nombre que 
nosotros querramos
</pre>

<p>el nombre por default de la etiqueta generada al utilizar cmet es custom-tag
sin embarco con dcmet podemos eligir el nombre que sea.</p>

<pre>
 R::gg('my-element|i¬dinamico')
 R::gg('script|',[
  Pjsp::dcmet('my-element'),
  Pjsp::innh('dinamico',R::gg('p|',"Creando un tag y agregandole este texto"))
])
</pre>
