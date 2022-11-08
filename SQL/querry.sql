SELECT Employees.FirstName,COUNT(Orders.EmployeeID) AS NumberOfSales FROM Orders
JOIN Employees ON Orders.EmployeeID = Employees.EmployeeID
GROUP BY Employees.FirstName;