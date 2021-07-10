<?php

putenv('DISPLAY_ERROS_DETAIL='.true);

putenv('DATA_HORA_SISTEMA='.$dateExpire = (new \DateTime('America/Manaus'))->format('Y-m-d H:i:s'));

putenv('BD_POSTGRESQL_HOST=ec2-18-214-195-34.compute-1.amazonaws.com'); 
putenv('BD_POSTGRESQL_DBNAME=d7abbk7ambej3p');
putenv('BD_POSTGRESQL_USER=ognboatlgwtvgn');
putenv('BD_POSTGRESQL_PASSWORD=35e95c8361ce1d9d6711737e9de913ae3fd2d154f95148241088c50ca8c03762');
// putenv('BD_POSTGRESQL_HOST=ec2-34-195-115-225.compute-1.amazonaws.com'); 
// putenv('BD_POSTGRESQL_DBNAME=d18h83l7c0v3p7');
// putenv('BD_POSTGRESQL_USER=reszmovspnaheu');
// putenv('BD_POSTGRESQL_PASSWORD=96745aaa6a93d4b7f8c91d50975be44ec25698a6a76cf41d6ce3e8d370c44ebd');
putenv('BD_POSTGRESQL_PORT=5432');

// putenv('JWT_SECRET_KEY= Projeto HEMO UEA/HEMOAM');

// putenv('RECAPTCHA_ENABLED='.true);
// putenv('RECAPTCHA_SITE_KEY=');
// putenv('RECAPTCHA_SECRET_KEY=6LdblOQZAAAAADwkg6xIhbPlpEhwkCY1MKStPbQ3');