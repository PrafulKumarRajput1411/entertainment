<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/indexx.css">
    <link rel="stylesheet" href="./css/typing.css">
    <link rel="stylesheet" href="./css/about.css">
    <link rel="stylesheet" href="./media/typing_media.css">
    <title>Document</title>
    <style>
        <?php
            include 'css/indexx.css';
            include 'css/typing.css';
            include 'css/about.css';
            include 'media/typing_media.css';
        ?>
    </style>
</head>

<body>
    <header class="main-header">

        <p class="warning-paragraph">Open this page in laptop or PC for better Display</p>

        <div class="typing-area">
            <div id="sub-typing-container">
                <p id="typing-container"></p>
            </div>
        </div>

        <div class="main-container">
            <div class="container-one card-container">
                <div class="box" id="tab">Tab</div>
                <div class="box" id="Q">Q</div>
                <div class="box" id="W">W</div>
                <div class="box" id="E">E</div>
                <div class="box" id="R">R</div>
                <div class="box" id="T">T</div>
                <div class="box" id="Y">Y</div>
                <div class="box" id="U">U</div>
                <div class="box" id="I">I</div>
                <div class="box" id="O">O</div>
                <div class="box" id="P">P</div>
            </div>
            <div class="container-two card-container">
                <div class="box" id="capslock">Caps</div>
                <div class="box" id="A">A</div>
                <div class="box" id="S">S</div>
                <div class="box" id="D">D</div>
                <div class="box" id="F">F</div>
                <div class="box" id="G">G</div>
                <div class="box" id="H">H</div>
                <div class="box" id="J">J</div>
                <div class="box" id="K">K</div>
                <div class="box" id="L">L</div>
            </div>
            <div class="container-three card-container">
                <div class="box" id="shift">shift</div>
                <div class="box" id="Z">Z</div>
                <div class="box" id="X">X</div>
                <div class="box" id="C">C</div>
                <div class="box" id="V">V</div>
                <div class="box" id="B">B</div>
                <div class="box" id="N">N</div>
                <div class="box" id="M">M</div>
            </div>
        </div>

    </header>



    <audio id="audio_For_A" controls style="display:none">
        <source src="./audios/horse.ogv"> Your browser does not support the audio element.
    </audio>
    <audio id="audio_For_B" controls style="display:none">
        <source src="./audios/clap.wav"> Your browser does not support the audio element.
    </audio>
    <audio id="audio_For_C" controls style="display:none">
        <source src="./audios/boom.wav"> Your browser does not support the audio element.
    </audio>






    <script>
        var num = 0;
        var shiftt = document.getElementById("shift");
        function toUpperCaseChange(s) {
            var paragraph = document.getElementById('typing-container').textContent;
            var strr = paragraph.substr((paragraph.length - 2) - paragraph.length);
            if (paragraph.length === 0) {
                return (s.toUpperCase());
            }
            if (strr === ". ") {
                return (s.toUpperCase());
            } else {
                return (s);
            }


        }
        function makecapital(e, str, str2) {
            if (e.shiftKey && e.code === str) {
                return (str2.toUpperCase());
            }
            else {
                var shiftcapital = toUpperCaseChange(str2);

                return shiftcapital;
            }
        }

        var paragraph = document.getElementById('typing-container').textContent;
        var key = 0;
        function keypressdown(str, idd, KeyCode, PressedKeyValue) {

            var shiftcapital = makecapital(KeyCode, PressedKeyValue, str);




            var QQ = document.getElementById(idd);
            QQ.style.opacity = 0.5
            QQ.style.color = 'red'
            QQ.style.fontWeight = 'bold'
            QQ.style.fontSize = '20px'
            QQ.style.boxShadow = ' 0px 0px 15px 8px red'
            paragraph = paragraph + shiftcapital;
            document.getElementById('audio_For_B').play();
            document.getElementById('typing-container').innerText = paragraph;

            console.log(paragraph);
            key = 0;
        }
        function keypressup(str) {
            var QQ = document.getElementById(str);
            QQ.style.opacity = '1'
            QQ.style.color = 'white'
            QQ.style.fontSize = '16px'
            QQ.style.fontWeight = 'normal'
            QQ.style.boxShadow = 'none'
        }
        document.body.addEventListener('keydown', function (e) {
            var keypre = e.keyCode;
            switch (keypre) {
                case 8:

                    var len = (paragraph.length);
                    var lenn = len - 1;
                    console.log(lenn);

                    paragraph = paragraph.substr(0, lenn);
                    console.log(paragraph);
                    document.getElementById('typing-container').innerText = paragraph;
                    break;
                case 32:
                    if (key === 0) {
                        key = 1;
                        paragraph = paragraph + " ";
                        document.getElementById('typing-container').innerHTML = paragraph;
                        break;
                    } else {
                        break;
                    }

                case 16:

                    shiftt.style.opacity = 0.5
                    shiftt.style.color = 'white'
                    shiftt.style.fontWeight = 'bold'
                    shiftt.style.fontSize = '20px'
                    shiftt.style.boxShadow = ' 0px 0px 15px 8px #283BEF'
                    break;

                case 65:
                    keypressdown('a', 'A', e, 'KeyA');
                    break;
                case 66:
                    keypressdown('b', 'B', e, 'KeyB');
                    break;
                case 67:
                    keypressdown('c', 'C', e, 'KeyC');
                    break;
                case 68:
                    keypressdown('d', 'D', e, 'KeyD');
                    break;
                case 69:
                    keypressdown('e', 'E', e, 'KeyE');
                    break;
                case 70:
                    keypressdown('f', 'F', e, 'KeyF');
                    break;
                case 71:
                    keypressdown('g', 'G', e, 'KeyG');
                    break;
                case 72:
                    keypressdown('h', 'H', e, 'KeyH');
                    break;
                case 73:
                    keypressdown('i', 'I', e, 'KeyI');
                    break;
                case 74:
                    keypressdown('j', 'J', e, 'KeyJ');
                    break;
                case 75:
                    keypressdown('k', 'K', e, 'KeyK');
                    break;
                case 76:
                    keypressdown('l', 'L', e, 'KeyL');
                    break;
                case 77:
                    keypressdown('m', 'M', e, 'KeyM');
                    break;
                case 78:
                    keypressdown('n', 'N', e, 'KeyN');
                    break;
                case 79:
                    keypressdown('o', 'O', e, 'KeyO');
                    break;
                case 80:
                    keypressdown('p', 'P', e, 'KeyP');
                    break;
                case 81:
                    keypressdown('q', 'Q', e, 'KeyQ');
                    break;
                case 82:
                    keypressdown('r', 'R', e, 'KeyR');
                    break;
                case 83:
                    keypressdown('s', 'S', e, 'KeyS');
                    break;
                case 84:
                    keypressdown('t', 'T', e, 'KeyT');
                    break;
                case 85:
                    keypressdown('u', 'U', e, 'KeyU');
                    break;
                case 86:
                    keypressdown('v', 'V', e, 'KeyV');
                    break;
                case 87:
                    keypressdown('w', 'W', e, 'KeyW');
                    break;
                case 88:
                    keypressdown('x', 'X', e, 'KeyX');
                    break;
                case 89:
                    keypressdown('y', 'Y', e, 'KeyY');
                    break;
                case 90:
                    keypressdown('z', 'Z', e, 'KeyZ');
                    break;

                case 186:
                    paragraph = paragraph + ";";
                    document.getElementById('typing-container').innerHTML = paragraph;
                    break;
                case 188:
                    paragraph = paragraph + ",";
                    document.getElementById('typing-container').innerHTML = paragraph;
                    break;

                case 190:
                    paragraph = paragraph + '.';
                    key = 0;
                    document.getElementById('typing-container').innerText = paragraph;
                    break;

                case 191:
                    paragraph = paragraph + "/";
                    document.getElementById('typing-container').innerHTML = paragraph;
                    break;

                case 219:
                    paragraph = paragraph + "[";
                    document.getElementById('typing-container').innerHTML = paragraph;
                    break;

                case 220:
                    var str='"\"';
                    paragraph = paragraph + str;
                    document.getElementById('typing-container').innerHTML = paragraph;
                    break;

                case 221:
                    paragraph = paragraph + "]";
                    document.getElementById('typing-container').innerHTML = paragraph;
                    break;

                    break;
                case 222:
                    paragraph = paragraph + "'";
                    document.getElementById('typing-container').innerHTML = paragraph;
                    break;



            }
        })
        document.body.addEventListener('keyup', function (e) {
            var keypre = e.keyCode;
            switch (keypre) {
                case 16:
                    shiftt.style.opacity = '1'
                    shiftt.style.color = 'white';
                    shiftt.style.fontSize = '16px'
                    shiftt.style.fontWeight = 'normal'
                    shiftt.style.boxShadow = 'none'
                    break;
                case 65:
                    keypressup('A');

                    break;

                case 66:
                    keypressup('B');

                    break;

                case 67:
                    keypressup('C');

                    break;
                case 68:
                    keypressup('D');

                    break;
                case 69:
                    keypressup('E');

                    break;

                case 70:
                    keypressup('F');

                    break;
                case 71:
                    keypressup('G');

                    break;
                case 72:
                    keypressup('H');

                    break;
                case 73:
                    keypressup('I');

                    break;
                case 74:
                    keypressup('J');

                    break;
                case 75:
                    keypressup('K');

                    break;
                case 76:
                    keypressup('L');

                    break;
                case 77:
                    keypressup('M');

                    break;
                case 78:
                    keypressup('N');

                    break;
                case 79:
                    keypressup('O');

                    break;
                case 80:
                    keypressup('P');
                    break;
                case 81:
                    keypressup('Q');

                    break;
                case 82:
                    keypressup('R');

                    break;
                case 83:
                    keypressup('S');

                    break;
                case 84:
                    keypressup('T');

                    break;
                case 85:
                    keypressup('U');

                    break;
                case 86:
                    keypressup('V');

                    break;
                case 87:
                    keypressup('W');

                    break;
                case 88:
                    keypressup('X');

                    break;
                case 89:
                    keypressup('Y');

                    break;
                case 90:
                    keypressup('Z');

                    break;


            }
        })

    </script>
</body>

</html>