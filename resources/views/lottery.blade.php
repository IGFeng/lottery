<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lottery!</title>
    <style>
        *, :after, :before {
            box-sizing: border-box;
        }

        body {
            display: flex;
            min-height: 100vh;
            margin: 0;
            justify-content: center;
            align-items: center;
        }

        body > div {
            height: 18.54rem;
            width: 30rem;
            display: flex;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 30px;
            border-radius: 4px;
            transition: .2s ease-out .0s;
            border: 1px solid rgba(0, 0, 0, 0.15);
            justify-content: center;
            align-items: center;
            color: #7a8e97;
        }

        body > div:hover {
            box-shadow: rgba(0, 0, 0, 0.15) 0px 0px 40px;
        }

        body > div div:first-of-type {
            text-align: center;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        body > div div:first-of-type > small {
            font-size: 1.1rem;
        }

        body > div div:first-of-type > span:nth-of-type(1) {
            color: #f00;
        }

        body > div div:first-of-type > span:nth-of-type(2) {
            color: #00f;
        }

        body > div div:first-of-type > span:nth-of-type(3) {
            color:rgb(0, 0, 0);
            transition: 0.2s;
            animation:change 2s linear 0s infinite;
        }



        #go{
            display: block;
            text-align: center;
            width: 10rem;
            height: 2.1rem;
            font-size: 1rem;
            letter-spacing: 2rem;
            padding-left: 2rem;
            font-family:Arial, Helvetica, sans-serif;
        }
        #luckydog{
            text-align: center;
            color: red;
        }
    </style>
</head>
<body>
    <div>
        <form method="POST" action="{{url('go')}}">
            @csrf
            <div>Lottery go!</div>
            <div><input type="text" placeholder="请输入一次抽取的人数" name="num"></div>
            <input id="go" type="submit" value="开始" name="go">
            @if(!empty($answer))
            @if(is_array($answer))
            @foreach($answer as $name)
            <div id="luckydog">恭喜{{$name??''}}中奖!!</div>
            @endforeach
            @else
            <div id="luckydog">恭喜{{$answer??''}}中奖!!</div>
            @endif
            @endif
        </form>
    </div>
</body>
<script>
    window.addEventListener('keydown',function(){
            if(event.keycode===13){
                confirm('是否继续');
            }
        })
</script>
</html>
