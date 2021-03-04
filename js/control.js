var questoes = [
	{
		alternativa: false
	},
	{
		alternativa: false
	},
	{
		alternativa: false
	},
	{
		alternativa: false
	},
	{
		alternativa: false
	},
	{
		alternativa: false
	},
	{
		alternativa: false
	},
	{
		alternativa: false
	},
	{
		alternativa: false
	}
	];

var transition_sound = new Audio("http://jpolito.zlique.org/server/sound/player/pl_wade2.wav");
transition_sound.volume = 0.4;
var step = false;

var transitionRow = $("#transition");
transitionRow.hide();
var inicio = $("#inicio");
	inicio.hide();
	$("body").addClass("context-start");

var questionOne = $("#question-one");
	questionOne.hide();

var questionTwo = $("#question-two");
	questionTwo.hide();

var questionThree = $("#question-three");
	questionThree.hide();

var questionFour = $("#question-four");
	questionFour.hide();

var questionFive = $("#question-five");
	questionFive.hide();

var questionSix = $("#question-six");
	questionSix.hide();

var questionSeven = $("#question-seven");
	questionSeven.hide();

var questionEight = $("#question-eight");
	questionEight.hide();

var questionNine = $("#question-nine");
	questionNine.hide();


$("[data-start-quizz]").on("click", (origin)=>{

	var nome = $("[data-nome]").val();
	var email = $("[data-email]").val();
	var peso = $("[data-peso]").val();

	if (nome.length == 0 || peso.length == 0 || email.length == 0) {
		$(".js-feedback").removeClass("invisible");

	}else{
		transitionRow.show();
		transition_sound.play();

		setTimeout(()=>{
			transitionRow.hide();
			origin.preventDefault();
			$("#inicio").hide();
			$("#question-one").show();
		setBodyContext('one');
		}, 500);
	}	
});

$("[data-one-for-two]").on("click", ()=>{
	if (checkClass('one')) {
		transition(questionOne, questionTwo, 'two');
	}else{
		alert("Selecione uma opção")
	}

});

$("[data-two-for-three]").on("click", ()=>{
	if (checkClass('two')) {
		transition(questionTwo, questionThree, 'three');
	}else{
		alert("Selecione uma opção")
	}	
});

$("[data-three-for-four]").on("click", ()=>{
	if (checkClass('three')) {
		transition(questionThree, questionFour, 'four');
	}else{
		alert("Selecione uma opção")
	}
});

$("[data-four-for-five]").on("click", ()=>{
	if (checkClass('four')) {
		transition(questionFour, questionFive, 'five');
	}else{
		alert("Selecione uma opção")
	}	
});
$("[data-five-for-six]").on("click", ()=>{
	if (checkClass('five')) {
		transition(questionFive, questionSix, 'six');
	}else{
		alert("Selecione uma opção")
	}
});

$("[data-six-for-seven]").on("click", ()=>{
	if (checkClass('six')) {
		transition(questionSix, questionSeven, 'seven');
	}else{
		alert("Selecione uma opção")
	}	
});
$("[data-seven-for-eight]").on("click", ()=>{
	if (checkClass('seven')) {
		transition(questionSeven, questionEight, 'eight');
	}else{
		alert("Selecione uma opção")
	}
});
$("[data-eight-for-nine]").on("click", ()=>{
	if (checkClass('eight')) {
		transition(questionEight, questionNine, 'nine');
	}else{
		alert("Selecione uma opção")
	}	
});

function setBodyContext(questionContext){
	$("body").addClass("context-question-"+questionContext);	
}

$("[data-one-corret]").on("click", (event)=>{

	toggleIcon($(event.target), 'one');
	checkResult(event.currentTarget.dataset.oneCorret, 0);
});

$("[data-two-corret]").on("click", (event)=>{
	toggleIcon($(event.target), 'two');
	checkResult(event.currentTarget.dataset.twoCorret, 1);
	
});
$("[data-three-corret]").on("click", (event)=>{
	toggleIcon($(event.target), 'three');
	checkResult(event.currentTarget.dataset.threeCorret,2);
});
$("[data-four-corret]").on("click", (event)=>{
	toggleIcon($(event.target), 'four');
	checkResult(event.currentTarget.dataset.fourCorret,3);	
});
$("[data-five-corret]").on("click", (event)=>{
	toggleIcon($(event.target), 'five');
	checkResult(event.currentTarget.dataset.fiveCorret, 4);
});
$("[data-six-corret]").on("click", (event)=>{
	toggleIcon($(event.target), 'six');
	checkResult(event.currentTarget.dataset.sixCorret,5);
	
});
$("[data-seven-corret]").on("click", (event)=>{
	toggleIcon($(event.target), 'seven');
	checkResult(event.currentTarget.dataset.sevenCorret,6);
});
$("[data-eight-corret]").on("click", (event)=>{
	toggleIcon($(event.target), 'eight');
	checkResult(event.currentTarget.dataset.eightCorret, 7);
});
$("[data-nine-corret]").on("click", (event)=>{
	toggleIcon($(event.target), 'nine');
	checkResult(event.currentTarget.dataset.ninetCorret,8);
	
});

$("[data-result]").on("click", ()=>{
	if (checkClass('nine')) {
		result();
	}else{
		console.log("não tem")
		
	}
});

function toggleIcon(target, number){

	$("[data-"+number+"-corret]").removeClass("fa-check-square-o");
	$("[data-"+number+"-corret]").addClass("fa-square-o");

	if(target.hasClass("fa-square-o")){
		target.removeClass("fa-square-o");
		target.addClass("fa-check-square-o");
	}else{

		target.removeClass("fa-check-square-o");
		target.addClass("fa-square-o");
	}
}
function checkClass(current){
	return $("[data-"+current+"-corret]").hasClass("fa-check-square-o");
}
function checkResult(target, i){
	if(target == "true"){
		questoes[i].alternativa = true;
	}else{
		questoes[i].alternativa = false;
	}

}

function result(){
	corretas = 0;
	questoes.forEach( ( q )=>{
		if(q.alternativa) corretas += 1;
	} );
	console.log(corretas);
	
}
function transition(from, to, context){
	transitionRow.show();
	transition_sound.play();
	from.hide();

	setTimeout(()=>{
		transitionRow.hide();	
		setBodyContext(context);
		to.show();
	}, 300);
}

//background sound http://iainpetrie.typepad.com/files/drop2.mp3
//transition sound http://jpolito.zlique.org/server/sound/player/pl_wade2.wav