
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Formal Letter</title>
  <style>
         .letter {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: white;
    border: 1px solid #ccc;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

header h1 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 24px;
}

.address-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
   
    /* background-size: contain; */
    /* background-repeat: no-repeat;
    width: 200px; Set the width of the div */
    /* height: auto; */
}

.recipient-address {
    flex: 1; 
    display: flex; 
    flex-direction: column;
    text-align: right;
    margin-top: 12px;
   
}

.sender-address{
    margin-top: 12px;
}

p {
    margin: 0;
    line-height: 1.5;
}

address p:first-child, date p:first-child, subject p:first-child {
    font-weight: bold;
}

.date{
    text-align: right;
    margin-top: 10px;
   
}

@media screen and (max-width: 600px) {
    .letter {
        padding: 10px;
    }
}
    .date{
    text-align: right;
    margin-top: 10px;
   
}

img {
    /* max-width: 50%;
    height: auto; */
    align-items: center;
    margin-top: 12px;
    flex-direction: column;
}
/* ... rest of the CSS code ... */


/* ... previous CSS code ... */
.addresses {
    display: flex;
    justify-content: space-between;
    align-items: center; /* Vertically align items */
    margin-bottom: 20px;
}

.sender-address, .recipient-address {
    flex: 1;
    padding: 10px;
}

.address-image {
    flex: 0 0 auto; /* Don't grow or shrink, fixed width */
    margin-right: 10px; /* Adjust margin as needed */
    "max-width: 200px; height: auto;
}


/* ... Styling of the table ... */
.table{
    /* width: 100%; */
    border-collapse: collapse;
    margin-bottom: 20px;

    border-radius: .8rem;
    overflow: hidden;
}

.table thead{
    background-color: #05c021;
}

.table thead tr th{
    /* font-size: 14px;
    font-weight: 600; */
    /* letter-spacing: 0.35px; */
    color: #FFFFFF;
    opacity: 1;
    /* padding: 12px; */
    border: 1px solid rgb(0, 0, 0);
}

tbody tr{
    height: 25px;
}

tbody tr td{
    border: 1px solid rgb(0, 0, 0);
    text-align: center;
}
  </style>
</head>
<body>
    <div class="letter">
        <header>
            <h1>UPRISE SACCO UGANDA</h1>
        </header>
        <div class="address-container">
            <div class="sender-address">
                <p><strong><i>P.O.Box 166</i></strong></p>
                <p><strong><i>Kampala UGANDA</i></strong></p>
                <p><i>Website:</i> <span style="color: blue;">wwww.uprisesacco.ac.ug</span></p>
                <p><i>Email:</i> <span style="color: blue;">contact@uprisesacco.info</span></p>
                <p><i>Fax:</i> +256 7877 8976</p>
            </div>
            {{-- <div class="address-image">
                <img src="data:image/jpeg;base64,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kKrByqjlsbgcDJ445rk/F/xS0v8AaQ+JfgGw8I/a9SXRdUTV7+4NpNDFZxx7cK7SIo3HkbRzx0xzX0c0KP8AeVW+oqC00azsN3kWtvDu67Iwufy+p/Os6GPhCmlKN5R5rO/8ytqvIdTDuUm772v8jyT9tTT31L4JxxwwvcbtVsQyqu7couE3ZH0zXrViuYoz8rHHX1qaazhuU2yRRyLnOGXIzTwij+EVzVMRzUI0bfC2/vt/kaxp2m5dxaZcDMR/T3p9BGRXKaHjH7MdnJB42+KhlhlSObxTI0bSJt3oba36evQ8+oqt+1JLceFPG3gPxhJa3lzpHh+6nj1BreFppII51jAk2ICxC+Wc4BxkV7YlrFEzsscatIdzEKBuPqfWia1juE2yRo6nqGXOa9COPtifrDj0tb5WZzyoXp8h8+wePLP9or9o/wAF3nhtbq80fwjDd3N9qDW0kMG+ZVVIlLqNzfJk46Z6jpXp37QNq0/wO8VRxxmSRtLuAqKM5JRscf0rsLHSbXTIyttbQW6sclY4woJ9eKmeFZFKsqsGGCCOtKtjFKdNwVow2XXdv82CoJqSl9rc4X9n+B7b4F+FlkVo2XSoNwZcEHyx1HbHpXkfwn+NOkfs3w+JvDPipdSsdQt9Xur2122U0y6hDKwKNEyIQxP931r6WSFY0Cqqqq9AB0qC50azvZY5JrW3lkj5RnjDFPoe1VTxkLzVaN4yd7J63V7dPMJUXaLjutDyr9kDwxqHhv4PxSalaSWNzq1zNfi2kG14FkOVVh13YAJHGM1V/Zm06WL4g/FaeW3kj+0eKGaN5E27x9lt+nrgjGfY17N5CEY2rj6U2K1jgZykcamRtzkKBuPqfU1FTHSm6ra+P/O5UaKSj/dOM+Pfg288e/BrxDo+nyeRfahZukLrxh+o/l34r5S8Ma/Z23w/sdC1bx74807VoYI9PuNAGkztLHIgCGJQFIaMY4dTtxzmvuPYPSqx0Sza7+0fZLbz8g+Z5Q3ccdcZ6AV1Zbm0sNS9k1dXvpbf5p6GVbC+0lzGD8JvAtr8M/hxofh+xkupLPR7KK0ha4OZSiIFG7oQeM10y8tTgoHajFeRUlKcnOW97nTGNkkgooopFBRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABQ3SiigCNhk05KdijFTYNQoooqgCiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAP//Z" alt="Image"style="max-width: 200px; height: auto;" >
            </div> --}}
        
          
            {{-- <div class="recipient-address">
                <h3><i>Contact Info</i></h3>
                <p><strong>Director:</strong> <i>0701234567</i></p>
                <p><strong>secretary:</strong> <i>0775098765</i></p>
                <p><strong>Manager:</strong> <i>0708934651</i></p>
                <p></p>

            </div> --}}
        </div>
             
            
        </div>
                
            <br>
            <p class="clock-container"></p></p>
            
            <p class="date-container"></p>
            
            
                <p>Subject:UPRISE SACCO Performance Report</p>
            
        </div>
    
        <hr>
        <body>

            <table class="table table-bordered border-primary">
                <tr>
                  <th>Column 1</th>
                  <th>Column 2</th>
                </tr>
                <tr>
                  <td>Row 1, Column 1</td>
                  <td>Row 1, Column 2</td>
                </tr>
                <tr>
                  <td>Row 2, Column 1</td>
                  <td>Row 2, Column 2</td>
                </tr>
                <tr>
                  <td>Row 3, Column 1</td>
                  <td>Row 3, Column 2</td>
                </tr>
                <tr>
                  <td>Row 4, Column 1</td>
                  <td>Row 4, Column 2</td>
                </tr>
                <tr>
                  <td>Row 5, Column 1</td>
                  <td>Row 5, Column 2</td>
                </tr>
              </table>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Loan ID</th>
                                        <th>Member ID</th>
                                        <th>Amount To Pay(UGX)</th>
                                        {{-- <th>Amount Per Installment(UGX)</th> --}}
                                        <th>Period (months)</th>
                                        <th>Start Date</th>
                                        <th>Progress</th>
                                        <th>Cleared Amount(UGX)</th>
                                        <th>Loan Balance(UGX)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_loans as $data)
                                        <tr>
                                            <td>{{ $data->loanId }}</td>
                                            <td>{{ $data->memberId }}</td>
                                            <td>{{ number_format($data->amountToPay, 2) }}</td>
                                            {{-- <td>{{ number_format($data->amountPerInstallment, 2) }}</td> --}}
                                            <td>{{ $data->installments }}</td>
                                            <td>{{ $data->paymentStart }}</td>
                                            <td>{{ $data->loanProgress }}</td>
                                            <td>{{ number_format($data->amountCleared, 2) }}</td>
                                            <td>{{ number_format($data->loanBalance, 2) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    
    </div>
    <script>
        let dateContainer = document.querySelector(".date-container");
        let clockContainer = document.querySelector(".clock-container");
        const weekdays = [
          "Sunday",
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday",
          "Saturday",
        ];
        const monthNames = [
          "January",
          "February",
          "March",
          "April",
          "May",
          "June",
          "July",
          "August",
          "September",
          "October",
          "November",
          "December",
        ];
    
        const dateClock = setInterval(function dateTime() {
          const today = new Date();
          let date = today.getDate();
          let day = weekdays[today.getDay()];
          let month = monthNames[today.getMonth()];
    
          let hours = today.getHours();
          let minutes = today.getMinutes();
    
          minutes = minutes < 10 ? "0" + minutes : minutes;
    
          dateContainer.innerHTML = `<p>${day}, ${month} ${date}</p>`;
          clockContainer.innerHTML = `${hours}:${minutes} hrs`;
        }, 1000);
      </script>
</body>
</html>
