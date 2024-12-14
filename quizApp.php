<?php

$questions = [
    ['question' => 'what is 2+2?' , 'correct' => '4'],
    ['question' => 'what is capital of france?', 'correct' => 'paris'],
    ['question' => 'who wrote "hamlet"?', 'correct' => 'shakespeare'],
];

$answers = [];

foreach ($questions as $key => $question) {
    echo ($key + 1) . ". " . $question['question'] . PHP_EOL;
    $answers[]=trim(readline("your answer:"));
}

//evaluate function

function evaluateQuiz(array $questions, array $answers): int
{
    $score = 0;
    foreach ($questions as $key => $question) {
        if ($answers[$key] === $question['correct']) {
            $score++;
        }
    }
    return $score;
};

//calculate score
$score = evaluateQuiz($questions, $answers);

echo "you scored $score out of " . count($questions) .PHP_EOL;

if ($score === count($questions)) {
    echo  "excellent job! ";
} elseif ($score > 1) {
    echo "good effort!";
} else {
    echo "better luck next time!";
}