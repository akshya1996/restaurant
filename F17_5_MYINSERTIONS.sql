
Insert into hotelemployee values(2,12.5,6825525210,'John',987654321,'01-FEB-17',301,'Cooper St','Arlington','Texas',76013,26,'second');
Insert into hotelemployee values(3,20.5,6825525242,'Mary',852963741,'11-FEB-17',552,'Pecan St','Arlington','Texas',76010,22,'second');
Insert into hotelemployee values(1,12.5,6825525292,'Albert',123456789,'01-JAN-17',5,'Mitchell St','Arlington','Texas',76010,21,'first');
Insert into hotelemployee values(4,20.5,6825525252,'Marvel',741852963,'12-FEB-16',404,'Pecan St','Arlington','Texas',76010,27,'second');
Insert into hotelemployee values(5,20.5,6825525272,'Clooney',753951826,'12-DEC-16',520,'Cooper St','Arlington','Texas',76013,33,'second');
Insert into hotelemployee values(6,20.5,6885525285,'Bob',774885996,'09-MAY-16',522,'Cooper St','Arlington','Texas',76013,23,'first');
Insert into hotelemployee values(7,20.5,4697400153,'Rob',885996223,'05-MAR-17',46,'W Mitchell St','Arlington','Texas',76013,30,'first');
Insert into hotelemployee values(8,20.5,8252623252,'Marcel',225336119,'05-JUN-17',789,'W Mitchell St','Arlington','Texas',76013,36,'first');
Insert into hotelemployee values(9,40,5896741253,'Kiara',119951155,'06-JUN-16',201,'Oak St','Arlington','Texas',76010,25,'general');
Insert into hotelemployee values(10,30,6825546968,'Ketz',445665456,'12-SEP-16',552,'E Mitchell St','Arlington','Texas',76013,40,'first');
Insert into hotelemployee values(11,30,6825547862,'Sam',447332005,'11-JUL-16',6,'Oak St','Arlington','Texas',76013,34,'first');
Insert into hotelemployee values(12,30,6825547766,'Hobby',445566889,'05-FEB-17',265,'W Mitchell St','Arlington','Texas',76013,29,'second');
Insert into hotelemployee values(13,30,6825527896,'Harry',445669821,'12-MAY-16',559,'E Mitchell St','Arlington','Texas',76013,33,'second');



insert into menu values(1,'cream of mushroom','simple type of soup where a basic roux is thinned with cream or milk and then mushrooms are added',5,'120 cal',10);
insert into menu values(2,'hot and sour soup','a traditional chinese soup prepared with vegetable stock, mushroom, tofu and egg',5,'110 cal',10);                                      
insert into menu values(3,'cream of pumpkin','a rich blend of butternut squash and pumpkin simmered in vegetable broth',5,'340 cal',12);
insert into menu values(4,'vegan split pea','hearty vegan soup with carrots, onions, celery, thyme and more',5,'240 cal',12);
insert into menu values(5,'ceasar salad','salad with shredded parmesan, jumbo croutons and ceasar dressing',7,'120 cal',11);
insert into menu values(6,'pasta salad','penne pasta salad with marinara sauce and customized veggies',7,'220 cal',13);
insert into menu values(7,'veg lasagna','Tender vegetables, a light tomato sauce, and lots of cheese makes this a chefs,special',9,'540 cal',11);                                             insert into menu values(8,'mac and cheese','Cooked macaroni pasta and cheese sauce',9,'540 cal',10);
insert into menu values(9,'schezwan noodles','noodles dipped in schezwan sauce and tossed with chilly and garlic',9,'620 cal',13);
insert into menu values(10,'greek rice','rice tossed with Tomatoes, Cucumbers, Red Onions, Greek Olives, Feta is our ches special',9,'500 cal',12);
insert into menu values(11,'sizzling brownie','hot brownie served with vannila icecream and chocolate sauce',8,'320 cal',10);
insert into menu values(12,'tiramisu','italian dessert made with delicate ladysfinger cookies,espresso, eggs, cheese and cocoa',8,'500 cal',11);



Insert into ingredients values('cream','diary','oz');
Insert into ingredients values('milk','diary','gallon');
Insert into ingredients values('tofu','diary','oz');
Insert into ingredients values('eggs','diary','dozen');
Insert into ingredients values('mushroom','veggies','lbs');
Insert into ingredients values('salt','seasoning','oz');
Insert into ingredients values('sugar','seasoning','oz');
Insert into ingredients values('pumpkin','veggies','lbs');
Insert into ingredients values('butternut','veggies','lbs');
Insert into ingredients values('vegetable stock','veggies','oz');
Insert into ingredients values('carrots','veggies','lbs');
Insert into ingredients values('onions','veggies','lbs');
Insert into ingredients values('celery','veggies','lbs');
Insert into ingredients values('thyme','veggies','lbs');
Insert into ingredients values('tomatoes','veggies','lbs');
Insert into ingredients values('cheese','diary','oz');
Insert into ingredients values('macaroni','pantry','lbs');
Insert into ingredients values('penne','pantry','lbs');
Insert into ingredients values('chillies','veggies','lbs');
Insert into ingredients values('garlic','veggies','lbs');
Insert into ingredients values('olives','veggies','lbs');
Insert into ingredients values('cucumber','veggies','lbs');
Insert into ingredients values('cocoa powder','desserts','lbs');
Insert into ingredients values('coffee powder','desserts','lbs');
Insert into ingredients values('all purpose flour','pantry','lbs');
Insert into ingredients values('mixed spices','seasoning','lbs');
Insert into ingredients values('rice','pantry','lbs');
Insert into ingredients values('noodles','pantry','lbs');
Insert into ingredients values('vannila essence','desserts','oz');



Insert into hoteltable values(1,'unreserved');
Insert into hoteltable values(2,'unreserved');
Insert into hoteltable values(3,'unreserved');
Insert into hoteltable values(4,'unreserved');
Insert into hoteltable values(5,'unreserved');
Insert into hoteltable values(6,'unreserved');



Insert into customer_table values('Oliver',7788994455,76010,1);
Insert into customer_table values('George',8877994455,76013,1);
Insert into customer_table values('Jack',4455669988,76019,2);
Insert into customer_table values('Jacob',1122336655,75039,2);
Insert into customer_table values('Noah',2233115566,75019,3);
Insert into customer_table values('Charlie',1155997766,76013,3);
Insert into customer_table values('Muhammad',4455669933,75032,4);
Insert into customer_table values('Thomas',6655665566,75039,4);
Insert into customer_table values('Max',4455889977,75036,5);
Insert into customer_table values('Troy',4477447744,76013,5);
Insert into customer_table values('Edward',4488996633,76010,6);
Insert into customer_table values('Joshua',4477442211,76013,6);



Insert into menu_order values(1122336655,3,3,5,3);
Insert into menu_order values(1155997766,4,4,5,3);
Insert into menu_order values(2233115566,5,6,7,2);
Insert into menu_order values(4455669933,6,5,7,3);
Insert into menu_order values(4455669988,7,7,9,3);
Insert into menu_order values(4455889977,8,11,8,2);
Insert into menu_order values(4477442211,3,9,9,1);
Insert into menu_order values(4477447744,4,9,9,3);
Insert into menu_order values(4488996633,5,3,5,4);
Insert into menu_order values(6655665566,6,8,9,4);
Insert into menu_order values(7788994455,7,11,8,4);
Insert into menu_order values(8877994455,8,7,9,3);
Insert into menu_order values(7788994455,7,5,7,4);


Insert into sitson_date values(1122336655,2,'26-OCT-17');
Insert into sitson_date values(1155997766,3,'27-OCT-17');
Insert into sitson_date values(2233115566,3,'23-OCT-17');
Insert into sitson_date values(4455669933,4,'28-OCT-17');
Insert into sitson_date values(4455669988,2,'25-OCT-17');
Insert into sitson_date values(4455889977,5,'28-OCT-17');
Insert into sitson_date values(4477442211,6,'26-OCT-17');
Insert into sitson_date values(4477447744,5,'27-OCT-17');
Insert into sitson_date values(4488996633,6,'24-OCT-17');
Insert into sitson_date values(6655665566,4,'25-OCT-17');
Insert into sitson_date values(7788994455,1,'23-OCT-17');
Insert into sitson_date values(8877994455,1,'24-OCT-17');



insert into supplier values(1,'Keith Foods','8177596000','7650','Will Rogers Blvd','Fort Worth','76140','Texas');
insert into supplier values(2,'DFW Organic Growing','8177502893','10027','Harmon Rd','Fort Worth','Texas','76177');
insert into supplier values(3,'Hartnett Company','8176258921','4151','Blue Mound Rd','Fort Worth','Texas','76016');
insert into supplier values(4,'Gonzalez Food Products','2147488225','1610','Fort Worth Ave','Dallas','Texas','75208');
insert into supplier values(5,'Texas Wholesale','8178344548','550','N Beach St','Fort worth','Texas','76111');



Insert into supplies values('all purpose flour',5);
Insert into supplies values('butternut',2);
Insert into supplies values('carrots',2);
Insert into supplies values('celery',2);
Insert into supplies values('cheese',1);
Insert into supplies values('chillies',2);
Insert into supplies values('cocoa powder',4);
Insert into supplies values('coffee powder',4);
Insert into supplies values('cream',1);
Insert into supplies values('cucumber',2);
Insert into supplies values('eggs',1);
Insert into supplies values('garlic',2);
Insert into supplies values('macaroni',5);
Insert into supplies values('milk',1);
Insert into supplies values('mushroom',2);
Insert into supplies values('olives',2);
Insert into supplies values('onions',2);
Insert into supplies values('penne',5);
Insert into supplies values('pumpkin',2);
Insert into supplies values('salt',3);
Insert into supplies values('sugar',3);
Insert into supplies values('thyme',2);
Insert into supplies values('tofu',1);
Insert into supplies values('tomatoes',2);
Insert into supplies values('vegetable stock',2);


Insert into supply_info values(1,'cheese',100,'01-OCT-17');
Insert into supply_info values(1,'cream',60,'01-OCT-17');
Insert into supply_info values(1,'eggs',10,'01-OCT-17');
Insert into supply_info values(1,'milk',100,'01-OCT-17');
Insert into supply_info values(1,'tofu',60,'01-OCT-17');
Insert into supply_info values(2,'butternut',60,'11-OCT-17');
Insert into supply_info values(2,'carrots',60,'11-OCT-17');
Insert into supply_info values(2,'celery',30,'11-OCT-17');
Insert into supply_info values(2,'chillies',50,'11-OCT-17');
Insert into supply_info values(2,'cucumber',60,'11-OCT-17');
Insert into supply_info values(2,'garlic',50,'11-OCT-17');
Insert into supply_info values(2,'mushroom',60,'11-OCT-17');
Insert into supply_info values(2,'olives',50,'11-OCT-17');
Insert into supply_info values(2,'onions',100,'11-OCT-17');
Insert into supply_info values(2,'pumpkin',60,'11-OCT-17');
Insert into supply_info values(2,'thyme',20,'11-OCT-17');
Insert into supply_info values(2,'tomatoes',100,'11-OCT-17');
Insert into supply_info values(2,'vegetable stock',100,'11-OCT-17');
Insert into supply_info values(3,'mixed spices',100,'17-OCT-17');
Insert into supply_info values(3,'salt',100,'17-OCT-17');
Insert into supply_info values(3,'sugar',100,'17-OCT-17');
Insert into supply_info values(4,'cocoa powder',60,'20-OCT-17');
Insert into supply_info values(4,'coffee powder',60,'20-OCT-17');
Insert into supply_info values(4,'vannila essence',20,'20-OCT-17');
Insert into supply_info values(5,'all purpose flour',60,'15-OCT-17');
Insert into supply_info values(5,'macaroni',50,'15-OCT-17');
Insert into supply_info values(5,'noodles',100,'15-OCT-17');
Insert into supply_info values(5,'penne',50,'15-OCT-17');
Insert into supply_info values(5,'rice',100,'15-OCT-17');




insert into menu_ingredients values(1,'cream',8);
insert into menu_ingredients values(1,'milk',.01);
         insert into menu_ingredients values(1,'mushroom',1);
         insert into menu_ingredients values(1,'salt',.1);
         insert into menu_ingredients values(1,'sugar',.1);
         insert into menu_ingredients values(1,'mixed spices',.1);
         insert into menu_ingredients values(3,'butternut',1);
         insert into menu_ingredients values(3,'pumpkin',1);
         insert into menu_ingredients values(3,'vegetable stock',3);
         insert into menu_ingredients values(3,'salt',.1);
         insert into menu_ingredients values(3,'sugar',.1);
         insert into menu_ingredients values(3,'mixed spices',.1);
         insert into menu_ingredients values(2,'vegetable stock',3);
         insert into menu_ingredients values(2,'mushroom',1);
         insert into menu_ingredients values(2,'tofu',.5);
         insert into menu_ingredients values(2,'eggs',.05);
         insert into menu_ingredients values(2,'salt',.1);
         insert into menu_ingredients values(2,'sugar',.1);
         insert into menu_ingredients values(2,'mixed spices',.1);
         insert into menu_ingredients values(4,'carrots',1);
         insert into menu_ingredients values(4,'onions',1);
         insert into menu_ingredients values(4,'celery',1);
         insert into menu_ingredients values(4,'vegetable stock',3);
         insert into menu_ingredients values(4,'thyme',.05);
         insert into menu_ingredients values(4,'salt',.1);
         insert into menu_ingredients values(4,'sugar',.1);
         insert into menu_ingredients values(4,'mixed spices',.1);
         insert into menu_ingredients values(5,'cheese',.05);
         insert into menu_ingredients values(5,'salt',.1);
         insert into menu_ingredients values(5,'carrots',1);
         insert into menu_ingredients values(5,'onions',1);
         insert into menu_ingredients values(5,'celery',.5);
         insert into menu_ingredients values(5,'tomatoes',1);
         insert into menu_ingredients values(5,'mixed spices',.1);
         insert into menu_ingredients values(6,'penne',2);
         insert into menu_ingredients values(6,'carrots',1);
         insert into menu_ingredients values(6,'onions',1);
         insert into menu_ingredients values(6,'celery',.5);
,         insert into menu_ingredients values(7,'tomatoes',1);
         insert into menu_ingredients values(7,'cheese',.5);
         insert into menu_ingredients values(7,'mixed spices',.1);
         insert into menu_ingredients values(7,'salt',.1);
         insert into menu_ingredients values(8,'cheese',.5);
         insert into menu_ingredients values(8,'macaroni',2);
         insert into menu_ingredients values(8,'salt',.1);
         insert into menu_ingredients values(9,'chillies',.5);
         insert into menu_ingredients values(9,'garlic',.5);
         insert into menu_ingredients values(9,'mixed spices',.1);
         insert into menu_ingredients values(9,'salt',.1);
         insert into menu_ingredients values(9,'noodles',2);
         insert into menu_ingredients values(10,'tomatoes',2);
        insert into menu_ingredients values(10,'cucumber',1);
        insert into menu_ingredients values(10,'onions',1);
        insert into menu_ingredients values(10,'olives',.5);
        insert into menu_ingredients values(10,'cheese',.5);
        insert into menu_ingredients values(10,'salt',.1);
        insert into menu_ingredients values(10,'rice',2);
        insert into menu_ingredients values(10,'mixed spices',.1);
        insert into menu_ingredients values(11,'milk',.1);
        insert into menu_ingredients values(11,'cream',.05);
        insert into menu_ingredients values(11,'sugar',.1);
        insert into menu_ingredients values(11,'cocoa powder',.05);
        insert into menu_ingredients values(11,'vannila essence',0);
        insert into menu_ingredients values(12,'coffee powder',.1);
        insert into menu_ingredients values(12,'eggs',.05);
        insert into menu_ingredients values(12,'cheese',.05);
        insert into menu_ingredients values(12,'milk',.01);
        insert into menu_ingredients values(12,'cream',.05);
        insert into menu_ingredients values(12,'sugar',.1);
        insert into menu_ingredients values(12,'cocoa powder',.05);



insert into date_order values(3,3,'1122336655','26-OCT-17','26-OCT-17 05.00.00.000000 PM');
insert into date_order values(3,9,'4477442211','26-OCT-17','26-OCT-17 04.17.00.000000 PM');
insert into date_order values(4,4,'1155997766','27-OCT-17','27-OCT-17 05.17.00.000000 PM');
insert into date_order values(4,9,'4477447744','27-OCT-17','27-OCT-17 09.00.00.000000 PM');
insert into date_order values(5,3,'4488996633','24-OCT-17','24-OCT-17 08.48.00.000000 PM');
insert into date_order values(5,6,'2233115566','23-OCT-17','23-OCT-17 07.30.00.000000 PM');
insert into date_order values(6,5,'4455669933','28-OCT-17','28-OCT-17 09.30.00.000000 AM');
insert into date_order values(6,8,'6655665566','25-OCT-17','25-OCT-17 11.05.00.000000 AM');
insert into date_order values(7,5,'7788994455','23-OCT-17','23-OCT-17 10.33.00.000000 AM');
insert into date_order values(7,7,'4455669988','25-OCT-17','25-OCT-17 10.45.00.000000 AM');
insert into date_order values(7,11,'7788994455','23-OCT-17','23-OCT-17 10.33.00.000000 AM');
insert into date_order values(8,7,'8877994455','24-OCT-17','24-OCT-17 10.20.00.000000 AM');
insert into date_order values(8,11,'4455889977','28-OCT-17','28-OCT-17 11.55.00.000000 AM');


         insert into shift values(1,'23-OCT-17 09.00.00.000000 AM','23-OCT-17 04.00.00.000000 PM');

         insert into shift values(1,'24-OCT-17 09.00.00.000000 AM','24-OCT-17 04.00.00.000000 PM');
         insert into shift values(1,'25-OCT-17 09.00.00.000000 AM','25-OCT-17 04.00.00.000000 PM');

         insert into shift values(1,'26-OCT-17 09.00.00.000000 AM','26-OCT-17 04.00.00.000000 PM');

         insert into shift values(1,'27-OCT-17 09.00.00.000000 AM','27-OCT-17 04.00.00.000000 PM');

         insert into shift values(1,'28-OCT-17 09.00.00.000000 AM','28-OCT-17 04.00.00.000000 PM');

         insert into shift values(2,'23-OCT-17 04.00.00.000000 PM','23-OCT-17 11.00.00.000000 PM');
 
         insert into shift values(2,'24-OCT-17 04.00.00.000000 PM','24-OCT-17 11.00.00.000000 PM');

         insert into shift values(2,'25-OCT-17 04.00.00.000000 PM','25-OCT-17 11.00.00.000000 PM');
  
         insert into shift values(2,'26-OCT-17 04.00.00.000000 PM','26-OCT-17 11.00.00.000000 PM');

         insert into shift values(2,'27-OCT-17 04.00.00.000000 PM','27-OCT-17 11.00.00.000000 PM');

         insert into shift values(2,'28-OCT-17 04.00.00.000000 PM','28-OCT-17 11.00.00.000000 PM');

         insert into shift values(3,'23-OCT-17 04.00.00.000000 PM','23-OCT-17 11.00.00.000000 PM');

         insert into shift values(3,'24-OCT-17 04.00.00.000000 PM','24-OCT-17 11.00.00.000000 PM');

         insert into shift values(3,'25-OCT-17 04.00.00.000000 PM','25-OCT-17 11.00.00.000000 PM');

         insert into shift values(3,'26-OCT-17 04.00.00.000000 PM','26-OCT-17 11.00.00.000000 PM');

         insert into shift values(3,'27-OCT-17 04.00.00.000000 PM','27-OCT-17 11.00.00.000000 PM');

         insert into shift values(3,'28-OCT-17 04.00.00.000000 PM','28-OCT-17 11.00.00.000000 PM');

         insert into shift values(4,'23-OCT-17 04.00.00.000000 PM','23-OCT-17 11.00.00.000000 PM');

         insert into shift values(4,'24-OCT-17 04.00.00.000000 PM','24-OCT-17 11.00.00.000000 PM');

         insert into shift values(4,'25-OCT-17 04.00.00.000000 PM','25-OCT-17 11.00.00.000000 PM');

        insert into shift values( 4,'26-OCT-17 04.00.00.000000 PM','26-OCT-17 11.00.00.000000 PM');

         insert into shift values(4,'27-OCT-17 04.00.00.000000 PM','27-OCT-17 11.00.00.000000 PM');

         insert into shift values(4,'28-OCT-17 04.00.00.000000 PM','28-OCT-17 11.00.00.000000 PM');

         insert into shift values(5,'23-OCT-17 04.00.00.000000 PM','23-OCT-17 11.00.00.000000 PM');

         insert into shift values(5,'24-OCT-17 04.00.00.000000 PM','24-OCT-17 11.00.00.000000 PM');

         insert into shift values(5,'25-OCT-17 04.00.00.000000 PM','25-OCT-17 11.00.00.000000 PM');

         insert into shift values(5,'26-OCT-17 04.00.00.000000 PM','26-OCT-17 11.00.00.000000 PM');
         insert into shift values(5,'27-OCT-17 04.00.00.000000 PM','27-OCT-17 11.00.00.000000 PM');

         insert into shift values(5,'28-OCT-17 04.00.00.000000 PM','28-OCT-17 11.00.00.000000 PM');
     
         insert into shift values(6,'23-OCT-17 09.00.00.000000 AM','23-OCT-17 04.00.00.000000 PM');

         insert into shift values(6,'24-OCT-17 09.00.00.000000 AM','24-OCT-17 04.00.00.000000 PM');

         insert into shift values(6,'25-OCT-17 09.00.00.000000 AM','25-OCT-17 04.00.00.000000 PM');

         insert into shift values(6,'26-OCT-17 09.00.00.000000 AM','26-OCT-17 04.00.00.000000 PM');

         insert into shift values(6,'27-OCT-17 09.00.00.000000 AM','27-OCT-17 04.00.00.000000 PM');

         insert into shift values(6,'28-OCT-17 09.00.00.000000 AM','28-OCT-17 04.00.00.000000 PM');

         insert into shift values(7,'23-OCT-17 09.00.00.000000 AM','23-OCT-17 04.00.00.000000 PM');

    

         insert into shift values(7,'24-OCT-17 09.00.00.000000 AM','24-OCT-17 04.00.00.000000 PM');

         insert into shift values(7,'25-OCT-17 09.00.00.000000 AM','25-OCT-17 04.00.00.000000 PM');

         insert into shift values(7,'26-OCT-17 09.00.00.000000 AM','26-OCT-17 04.00.00.000000 PM');

         insert into shift values(7,'27-OCT-17 09.00.00.000000 AM','27-OCT-17 04.00.00.000000 PM');

         insert into shift values(7,'28-OCT-17 09.00.00.000000 AM','28-OCT-17 04.00.00.000000 PM');


    
         insert into shift values(8,'23-OCT-17 09.00.00.000000 AM','23-OCT-17 04.00.00.000000 PM');

         insert into shift values(8,'24-OCT-17 09.00.00.000000 AM','24-OCT-17 04.00.00.000000 PM');


         insert into shift values(8,'25-OCT-17 09.00.00.000000 AM','25-OCT-17 04.00.00.000000 PM');

         insert into shift values(8,'26-OCT-17 09.00.00.000000 AM','26-OCT-17 04.00.00.000000 PM');

         insert into shift values(8,'27-OCT-17 09.00.00.000000 AM','27-OCT-17 04.00.00.000000 PM');

         insert into shift values(8,'28-OCT-17 09.00.00.000000 AM','28-OCT-17 04.00.00.000000 PM');

         insert into shift values(9,'23-OCT-17 11.00.00.000000 AM','23-OCT-17 07.00.00.000000 PM');

         insert into shift values(9,'24-OCT-17 11.00.00.000000 AM','24-OCT-17 07.00.00.000000 PM');

         insert into shift values(9,'25-OCT-17 11.00.00.000000 AM','25-OCT-17 07.00.00.000000 PM');

         insert into shift values(9,'26-OCT-17 11.00.00.000000 AM','26-OCT-17 07.00.00.000000 PM');

         insert into shift values(9,'27-OCT-17 11.00.00.000000 AM','27-OCT-17 07.00.00.000000 PM');

         insert into shift values(9,'28-OCT-17 11.00.00.000000 AM','28-OCT-17 07.00.00.000000 PM');

        insert into shift values(10,'23-OCT-17 09.00.00.000000 AM','23-OCT-17 04.00.00.000000 PM');

        insert into shift values(10,'24-OCT-17 09.00.00.000000 AM','24-OCT-17 04.00.00.000000 PM');

        insert into shift values(10,'25-OCT-17 09.00.00.000000 AM','25-OCT-17 04.00.00.000000 PM');

        insert into shift values(10,'26-OCT-17 09.00.00.000000 AM','26-OCT-17 04.00.00.000000 PM');

        insert into shift values(10,'27-OCT-17 09.00.00.000000 AM','27-OCT-17 04.00.00.000000 PM');

        insert into shift values(10,'28-OCT-17 09.00.00.000000 AM','28-OCT-17 04.00.00.000000 PM');

        insert into shift values(11,'23-OCT-17 09.00.00.000000 AM','23-OCT-17 04.00.00.000000 PM');

        insert into shift values(11,'24-OCT-17 09.00.00.000000 AM','24-OCT-17 04.00.00.000000 PM');

        insert into shift values(11,'25-OCT-17 09.00.00.000000 AM','25-OCT-17 04.00.00.000000 PM');

        insert into shift values(11,'26-OCT-17 09.00.00.000000 AM','26-OCT-17 04.00.00.000000 PM');

        insert into shift values(11,'27-OCT-17 09.00.00.000000 AM','27-OCT-17 04.00.00.000000 PM');

        insert into shift values(11,'28-OCT-17 09.00.00.000000 AM','28-OCT-17 04.00.00.000000 PM');

        insert into shift values(12,'23-OCT-17 04.00.00.000000 PM','23-OCT-17 11.00.00.000000 PM');

        insert into shift values(12,'24-OCT-17 04.00.00.000000 PM','24-OCT-17 11.00.00.000000 PM');

        insert into shift values(12,'25-OCT-17 04.00.00.000000 PM','25-OCT-17 11.00.00.000000 PM');

        insert into shift values(12,'26-OCT-17 04.00.00.000000 PM','26-OCT-17 11.00.00.000000 PM');

        insert into shift values(12,'27-OCT-17 04.00.00.000000 PM','27-OCT-17 11.00.00.000000 PM');

        insert into shift values(12,'28-OCT-17 04.00.00.000000 PM','28-OCT-17 11.00.00.000000 PM');

   

        insert into shift values(13,'23-OCT-17 04.00.00.000000 PM','23-OCT-17 11.00.00.000000 PM');

        insert into shift values(13,'24-OCT-17 04.00.00.000000 PM','24-OCT-17 11.00.00.000000 PM');

        insert into shift values(13,'25-OCT-17 04.00.00.000000 PM','25-OCT-17 11.00.00.000000 PM');

        insert into shift values(13,'26-OCT-17 04.00.00.000000 PM','26-OCT-17 11.00.00.000000 PM');

        insert into shift values(13,'27-OCT-17 04.00.00.000000 PM','27-OCT-17 11.00.00.000000 PM');

        insert into shift values(13,'28-OCT-17 04.00.00.000000 PM','28-OCT-17 11.00.00.000000 PM');

		
		











