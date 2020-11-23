DOMAIN="gdrive"
EMAIL="gdrive@hello.com"
ORGANISATION="gdrive's company"
CITY="Moscow"
COMMON_NAME="localhost"
RSA_BIT=2048
DAYS=366
SUBJECT="/C=RU/ST=Moscow/L=Moscow/O=$ORGANISATION/CN=$COMMON_NAME"

openssl req -x509 -nodes -days $DAYS -newkey rsa:$RSA_BIT -keyout $DOMAIN.key -out $DOMAIN.crt -subj "$SUBJECT"

openssl dhparam -out dhparam.pem 2048
