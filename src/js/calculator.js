(function(doc, window){
	'use strict';
	
	var inlegInEurosInput = doc.getElementById('calculator_inleg_in_euros');
	var aantalBriqsInput = doc.getElementById('calculator_aantal_briqs');
	var perMaandElm = doc.getElementById('calculator_per_maand');
	var perJaarElm = doc.getElementById('calculator_per_paar');
	var perVijfJaarElm = doc.getElementById('calculator_per_vijf_paar');
	
	var formatEuro = function(number){
		var decimals = 2;
		var decimalPoint = ',';
		var thousandsSeparator = '.';
		var strippedNumber = (number + '').replace(/[^0-9+\-Ee.]/g, '');
		var n = !isFinite(+strippedNumber) ? 0 : +strippedNumber;
		var s;
		var prec = 0;
		if(decimals !== '?'){
			prec = !isFinite(+decimals) ? 0 : Math.abs(decimals);
		
			var toFixedFix = function (n, prec) {
				var k = Math.pow(10, prec);
				return '' + Math.round(n * k) / k;
			};
				
			s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
		}else{
			s = String(n).split('.');
		}
		if(s[0].length > 3){
			s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, thousandsSeparator);
		}
		if((s[1] || '').length < prec){
			s[1] = s[1] || '';
			s[1] += new Array(prec - s[1].length + 1).join('0');
		}
		
		var result = s.join(decimalPoint);
		
		return result.replace(decimalPoint+'00', decimalPoint+'-');
	};
	
	var changedAmount = function(e){
		var inlegInEuros = Number(inlegInEurosInput.value);
		var aantalBriqs = Number(aantalBriqsInput.value);
		
		switch(this.id){
			case 'calculator_inleg_in_euros':
				inlegInEuros = Number(this.value);
				if(e.type === 'change') inlegInEuros = Math.round(inlegInEuros / 10) * 10;
				aantalBriqs = inlegInEuros / 10;
				break;
			case 'calculator_aantal_briqs':
				aantalBriqs = Number(this.value);
				if(e.type === 'change') aantalBriqs = Math.round(aantalBriqs);
				inlegInEuros = aantalBriqs * 10;
				break;
		}
		
		var perJaar = inlegInEuros * 0.04;
		var perMaand = perJaar / 12;
		var perVijfJaar = inlegInEuros * 0.03 + perJaar * 5;
		
		inlegInEurosInput.value = inlegInEuros;
		aantalBriqsInput.value = aantalBriqs;
		perMaandElm.textContent = formatEuro(perMaand);
		perJaarElm.textContent = formatEuro(perJaar);
		perVijfJaarElm.textContent = formatEuro(perVijfJaar);
	};
	
	inlegInEurosInput.addEventListener('change', changedAmount);
	aantalBriqsInput.addEventListener('change', changedAmount);
	inlegInEurosInput.addEventListener('keyup', changedAmount);
	aantalBriqsInput.addEventListener('keyup', changedAmount);
	
})(document, window);