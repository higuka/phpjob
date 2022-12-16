//７章チェックテスト問1
let numbers = [2, 5, 12, 13, 15, 18, 22];
function isEven(data) {

for (let i = 0; i < data.length; i++) {
//ここに答えを実装してください。
var num = (data [i]);
if(num % 2 !== 0)continue;
console.log(num + 'は偶数です');
}
}
//関数呼び出し
isEven(numbers);



  //７章チェックテスト問2
class Car {

    //コンストラクタ
    constructor(gasolene, number) {
        this.gasolene = gasolene;
        this.number = number;
    }

    //（関数）作成
    getNumGas() {
          console.log(`ガソリンは${this.gasolene}です。`);
          console.log(`ナンバーは${this.number}です`);
    }
}
//ガソリンとナンバーがセットのオブジェクト作成
let kuruma = new Car('エネオス', 'わ12345');
kuruma.getNumGas();
//変数は「kuruma」としました。