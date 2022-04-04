const quiz = [
  {
    question: 'ゲーム市場売れたゲーム機は？',
    answers:  [
                'スーパーファミコン',
                'プレイステーション２',
                'ニンテンドースイッチ',
                'ニンテンドーDS'
              ],
    correct:  'ニンテンドーDS'
  },
  {
    question: '右手にたいまつを挙げていることで有名な元々はフランスからの贈り物というニューヨークの象徴とも言える像の名は？',
    answers:  [
                '世界の女神',
                '自由の女神',
                '世界のナベアツ',
                '自由のナベアツ'
              ],
    correct:  '自由の女神'
  },
  {
    question: '自転車をこぐところはペダル、では座るところをカタカナ３文字でなんと言う？',
    answers:  [
                'サドル',
                'サトル',
                'バトル',
                'パドル'
              ],
    correct:  'サドル'
  },
  {
    question: '日焼けの原因となる「UV」。これを漢字３文字でいうと何でしょう？',
    answers:  [
                '赤外線',
                '黄外線',
                '緑外線',
                '紫外線'
              ],
    correct:  '紫外線'
  }
];

const quizLength = quiz.length;
let quizIndex = 0;
let score = 0;

const $button = document.getElementsByTagName('button');
const buttonLength = $button.length;

//クイズの問題文、選択肢を定義
const setupQuiz = () => {
  document.getElementById('js-question').textContent = quiz[quizIndex].question;
  let buttonIndex = 0;
  while(buttonIndex < buttonLength){
    $button[buttonIndex].textContent = quiz[quizIndex].answers[buttonIndex];
    buttonIndex++
  }
}

setupQuiz();

//正誤判定の関数
const clickHandler = (e) => {
  if(quiz[quizIndex].correct === e.target.textContent){
    window.alert('正解！')
    score++
  } else {
    window.alert('不正解！')
  }

  quizIndex++;

  if(quizIndex < quizLength) {
    //問題数があれば実行
    setupQuiz();
  } else {
    //問題数がなければ実行
    window.alert('終了！あなたの正解数は' + score + '/' + quizLength + 'です');
  }

}

//ボタンクリックしたら正誤判定
let handlerIndex = 0;
while(handlerIndex < buttonLength){
  $button[handlerIndex].addEventListener('click', (e) => {
    clickHandler(e);
  })
  handlerIndex++
}