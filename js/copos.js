/*function copos() {
			$("#images").empty();
			var respostas = getCookie("respostas");
			//alert(respostas);
			var i;
			var y;
			var retorno = "";
			//if(getCookie("respostas") == '' | getCookie("respostas") == 0) {} else {
				for (i=1; i <= getCookie("respostas");i++) {
					//alert('i='+i);
					retorno += '<img class="ml-2 image-copo" src="fatias/copo-cheio.png" >'; 
				}
			//}
			var n = 9 - getCookie("respostas");
			//if(n == 9) {
			//	retorno += '<img class="image-copo" src="fatias/copo-vazio.png" ><img class="image-copo" src="fatias/copo-vazio.png" ><img class="ml-2 image-copo" src="fatias/copo-vazio.png" ><img class="ml-2 image-copo" src="fatias/copo-vazio.png" ><img class="ml-2 image-copo" src="fatias/copo-vazio.png" ><img class="ml-2 image-copo" src="fatias/copo-vazio.png" ><img class="ml-2 image-copo" src="fatias/copo-vazio.png" ><img class="ml-2 image-copo" src="fatias/copo-vazio.png" ><img class="ml-2 image-copo" src="fatias/copo-vazio.png" >';
			//} else {
				for (y=1;y <= n;y++) {
					//alert('y='+y);
					retorno += '<img class="ml-2 image-copo" src="fatias/copo-vazio.png" >';
				}
			//}
			var respostas = null;
			$("#images").append(retorno);
}*/