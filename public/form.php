curl --location --request POST 'https://emails.pabbly.com/api/send-emails' \
--header 'Content-Type: application/json' \
--data-raw '{
    "from_name": "",
    "from_email": "",
    "delivery_server_id": "bkjC0KdLFU7Y",
    "list_ids": "Ijg1MDcyNSI_3D",
    "subject": "Submission Received",
    "exclude_list_ids": "Ijg1MDgyNSI_3D, Ijg1MDtyNSI_3D",
    "individual_emails": "",
    "template_id": "IjEzODc0MSI_3D"
}'
