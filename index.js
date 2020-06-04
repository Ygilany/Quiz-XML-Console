const convert = require(`xml-js`);
const fs = require(`fs`);

console.log(process.argv)
const result = convert.xml2json(fs.readFileSync(`./${process.argv[2]}`), {compact: true});
const jsonQuiz = JSON.parse(result);

for (let group of jsonQuiz.quiz.group) {
  console.log(`-------------------------------------------------------`)
  console.log(`Questions Group: ${group._attributes.id}`)
  console.log(`-------------------------------------------------------`)

  for(let question of group.question) {
    console.log(`➡ Q.${question.id._text} - (${question.type._text}) - ${question.text._text}`);
    for(let answer of question.answer) {
      console.log(`➡➡${answer._text}. ${answer._attributes.correct === `true` ? "<<" : ""}`)
    }
    console.log()
  }
}
