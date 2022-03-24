<style>
    .container {
        padding: 20px;
    }
    q {
        font-size: 20px;
    }
</style>

<div class="container">
    <h1>🎉 {{ $details['title'] }} 🎉</h1>
    <div>
        <img src="https://static.toiimg.com/thumb/msid-74542497,imgsize-270244,width-400,height-300,resizemode-75/74542497.jpg" alt="Holi Image">
    </div>

    <br>
    <i><q>May your life be as colorful as the festival itself or even more.</q></i>

    <br><br>
    <p>
        {{ $details['body'] }}
    </p>
    <br>

    Thanks & Regards<br>
    {{ $details['from'] }}
</div>