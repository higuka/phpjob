//７章チェックテスト問1
let numbers = [2, 5, 12, 13, 15, 18, 22];
//ここに答えを実装してください。↓↓↓
var num = numbers.filter(function isEven(value) {
    return value % 2 === 0;
  });
  console.log(num+ 'は偶数です');


  //７章チェックテスト問2
class Car {

    //コンストラクタ
    constructor(eneos, わ12345) {
        this.eneos = eneos;
        this.わ12345 = わ12345;
    }

    //（関数）作成
    getNumGas() {
          console.log(`ガソリンは${this.eneos}です。`);
          console.log(`ナンバーは${this.わ12345}です`);
    }
}
//ガソリンとナンバーがセットのオブジェクト作成
let kuruma = new Car('エネオス', 'わ12345');
kuruma.getNumGas();
//変数は「kuruma」としました。