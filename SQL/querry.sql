SELECT
    brokerTable.broker_name AS BrokerName,
    COUNT(customerTable.broker_id) AS TotalBrokered
FROM
    customerTable
INNER JOIN brokerTable ON customerTable.broker_id = brokerTable.broker_id
GROUP BY
    brokerTable.broker_name
ORDER BY
   TotalBrokered
DESC
    ;