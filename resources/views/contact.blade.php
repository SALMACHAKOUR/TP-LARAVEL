<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        :root {

--input-color: #99A3BA;
--input-border: #CDD9ED;
--input-background: #fff;
--input-placeholder: #CBD1DC;

--input-border-focus: #275EFE;

--group-color: var(--input-color);
--group-border: var(--input-border);
--group-background: #EEF4FF;

--group-color-focus: #fff;
--group-border-focus: var(--input-border-focus);
--group-background-focus: #678EFE;

}

.form-field {
display: block;
width: 100%;
padding: 8px 16px;
line-height: 25px;
font-size: 14px;
font-weight: 500;
font-family: inherit;
border-radius: 6px;
-webkit-appearance: none;
color: var(--input-color);
border: 1px solid var(--input-border);
background: var(--input-background);
transition: border .3s ease;
&::placeholder {
    color: var(--input-placeholder);
}
&:focus {
    outline: none;
    border-color: var(--input-border-focus);
}
}

.form-group {
position: relative;
display: flex;
width: 100%;
& > span,
.form-field {
    white-space: nowrap;
    display: block;
    &:not(:first-child):not(:last-child) {
        border-radius: 0;
    }
    &:first-child {
        border-radius: 6px 0 0 6px;
    }
    &:last-child {
        border-radius: 0 6px 6px 0;
    }
    &:not(:first-child) {
        margin-left: -1px;
    }
}
.form-field {
    position: relative;
    z-index: 1;
    flex: 1 1 auto;
    width: 1%;
    margin-top: 0;
    margin-bottom: 0;
}
& > span {
    text-align: center;
    padding: 8px 12px;
    font-size: 14px;
    line-height: 25px;
    color: var(--group-color);
    background: var(--group-background);
    border: 1px solid var(--group-border);
    transition:  .3s ease, border .3s ease, color .3s ease;
}
&:focus-within {
    & > span {
        color: var(--group-color-focus);
        background: var(--group-background-focus);
        border-color: var(--group-border-focus);
    }
}
}

html {
box-sizing: border-box;
-webkit-font-smoothing: antialiased;
}

* {
box-sizing: inherit;
&:before,
&:after {
    box-sizing: inherit;
}
}

span{
    font-family: Sofia;
 
}

body {
min-height: 100vh;
font-family: 'Mukta Malar', Arial;
display: flex;
justify-content: center;
align-items: center;
flex-direction: column;
background: #CEB4DB;  
.form-group {
    max-width: 360px;
    &:not(:last-child) {
        margin-bottom: 32px;
    }
}
}
#sal{
    width: 100%;
padding: 8px 16px;
line-height: 25px;
font-size: 14px;
font-weight: 500;
font-family: inherit;*
color: black;
border: 1px solid var(--input-border);
background: var(--input-background);

}
div{
    justify-content: center; 
}
    </style>
</head>
<body>    <form action="/thankyou" method="POST">
    @csrf
   
    <div class="form-group">
    <span>name</span>
    <input class="form-field" type="text" placeholder="your name" name="name">
</div><br><br>

<div class="form-group">
    <input class="form-field" type="email" name="email"placeholder=" Your Email">
    <span>@gmail.com</span>
</div><br> <br>
   
   <input id="sal" type="submit" value='ok'/>
   
    </form>
    
</body>
</html>