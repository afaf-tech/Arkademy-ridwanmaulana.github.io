function vowels(str) {
    //match pake regex
    var words = str.match(/[aiueo]/gi);
    // return boolean
    var countVowels = words ? words.length : 0;
    console.log('huruf vokal dalam kata "' + str + '" berjumlah : ' + countVowels + ' huruf');
    return;
};
vowels('programmer');
vowels('hmm');