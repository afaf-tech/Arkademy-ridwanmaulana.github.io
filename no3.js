function cetak_gambar(value) {
    var a = value - 1;
    var b = a / 2;
    var c = b + 1;
    var d = c;

    str = '';

    for (let i = 0; i < value; i++) {
        for (let j = 0; j < value; j++) {
            if (i == d - 1) {
                str += ' * ';
            } else {
                if (j == 0 || j == (value - 1)) {
                    str += ' * '
                } else {
                    str += ' = ';
                }
            }

        }
        str += '\n';

    }
    console.log(str);
}