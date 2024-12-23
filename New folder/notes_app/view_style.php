<style>
    * {
        margin: 0%;
        padding: 0;
        border-radius: 5px;
        font-family: Arial, Helvetica, sans-serif;
    }

    h1,
    form {
        display: inline;
        color: white;
    }

    .heading {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        background-color: rgb(40, 40, 50);
    }

    .main1{
        color: white;
        display: grid;
        grid-template-columns: 1fr 3fr 1fr;
        margin-top: 10px;
    }

    body {
        background-color: black;
    }

    .new_note {
        background-color: rgb(40, 40, 50);
        padding: 1%;
        width: 60vw;
        height: 50vh;
    }

    .note_title {
        width: 100%;
    }

    .content {
        width: 100%;
    }
    a {
        text-decoration: none;
        color: inherit;
    }
    .your_notes {
        margin-top: 1%;
        display: grid;
        grid-template-columns: repeat(3, 30%);
        /* background-color: rgb(150, 150, 150); */
        justify-content: space-around;
        align-items: center;
    }

    .note {
        background-color: rgb(40, 40, 50);
        padding: 2%;
        margin: 1%;
        overflow-x: hidden;
    }
    [type = "button"] ,[type = "submit"] ,[value='Delete Note']{
        padding: 0.3vw 1vw;
    }
    textarea{
        height: 30vh;
    }
</style>