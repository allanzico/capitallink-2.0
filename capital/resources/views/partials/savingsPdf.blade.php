<!DOCTYPE html>
<html>
<head>
<style>
#savings {
  font-family: "Lucida Console", "Courier New", monospace;
  border-collapse: collapse;
  width: 100%;
}

#savings td, #savings th {
  border: 1px solid #ddd;
  padding: 8px;
}

#savings tr:nth-child(even){background-color: #f2f2f2;}

#savings tr:hover {background-color: #ddd;}

#savings th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

    <table id="savings">
        <thead>
            <tr>
                <th>Date</th>
                <th>Amount</th>
                <th>Saved By</th>
                <th>Saved For</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($savings as $saving)
            <tr>
                <td>
                    {{ $saving->subscription_date }}
                </td>

                <td>
                    {{ $saving->amount }}
                </td>
                <td>
                    {{ $saving->user->name}}
                </td>
                <td>
                    {{ $saving->subscriptionType->name }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</body>
</html>
