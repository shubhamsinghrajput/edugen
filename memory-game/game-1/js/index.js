var url = 'http://melissacabral.com/demos/javascript/images/socks/';
//each desired card is an item in this array
var socks = ['blue', 'gray', 'green', 'pink', 'purple', 'red', 'blue', 'gray', 'green', 'pink', 'purple', 'red'];

//keep track of the number of moves
var clicks = 0;

//variables to hold the 2 clicked socks
var sock1 = '';
var sock2 = '';
var sock1Id = '';
var sock2Id = '';

//put unique IDs on each card on the board
$('.flip').each(function(i) {
	$(this).attr('id', i + 1);
});

$('.back img').each(function(i) {
	var theSock = '' + socks.splice(getRandomInt(0, socks.length - 1), 1);
	var theCard = $(this).parent().parent();
	console.log(theCard);
	theCard.addClass(theSock);
	$(this).attr('src', url + theSock + 'sock.png')
});

function getRandomInt(min, max) {
	return Math.ceil(Math.random() * (max - min) + min);
}

$('.flip').click(function(e) {
	// $(this).off();
	var theCard = $(this).find('.card');
	
	//allow only 2 flipped cards?
	if ($('.flipped').length < 2) {
		theCard.addClass('flipped');
		var classList = theCard.attr('class');

		classList = classList.split(' ');

		var theColor = classList[1];
		console.log(theColor);
		if (sock1 == '') {
			sock1 = theColor;
			sock1Id = theCard.parent().attr('id');
		} else {
			sock2 = theColor;
			sock2Id = theCard.parent().attr('id');
			checkMatch();
		}

	}

});
function checkMatch(){
		if (sock1 == sock2 && sock2Id != sock1Id ) {
			console.log('match');
			$('.' + sock2 + '.flipped').parent().off().addClass('matched');
			$('.' + sock2 + '.flipped .front img').attr('src', url + 'match.png');
			$('.' + sock2 + '.flipped .back').removeClass('back face');
			$('.' + sock2 + '.flipped .front').css({'background-color':'transparent'});
			//call flipback and checkwin here
			setTimeout(flipBack, 800);
			checkWin();
		} else {
			//call flipback
			setTimeout(flipBack, 800);
		}
}

function flipBack(){
	$('.flipped').removeClass('flipped');
	sock1 = '';
	sock2 = '';
	sock1Id = '';
	sock2Id = '';
}

function checkWin(){
	if( $('.matched').length == $('.flip').length ){
		//all the cards are matched
		message = '<h2>You have matched all the socks!</h2>';
		$('#stage').prepend('div').html(message);
		}
}