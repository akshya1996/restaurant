/* Find which menu item is ordered the most so that we can increase the price for that item to increase the profit.
From the orders relation, identify the itemid that are repeated the most and find the itemname for the corresponding itemid from the menu relation
*/
select A.itemid, B.itemname
from menu_order A, menu B
where A.itemid=B.itemid
group by A.itemid, B.itemid, B.itemname
having count(A.itemid)=(select max(mycount)
from (select C.itemid, count(C.itemid) mycount
from menu_order C
group by C.itemid));





/* Find which item is ordered the least so that we can remove that menu item from the list.
From the orders relation, identify the itemid that are repeated the least and find the itemname for the corresponding itemid from the menu relation
 */
select A.itemid, B.itemname
from menu_order A, menu B
where A.itemid=B.itemid
group by A.itemid, B.itemid, B.itemname
having count(A.itemid)=(select min(mycount)
from (select C.itemid, count(C.itemid) mycount
from menu_order C
group by C.itemid));




/*  Find which chefs menu item has the least rating so that we can ask him to replace the menu 
From the orders relation find the itemid with the least rating. Find the empid for the corresponding itemid from the menu relation. Find the employee name for the corresponding empid from the employee relation. 
*/
select A.itemid, B.itemname, avg(rating) as AvgRating
from menu_order A, menu B
where A.itemid=B.itemid
group by A.itemid, B.itemname
having avg(rating)=(select min(avg(rating))
from menu_order
group by itemid);


/*  	Introduce new items as specials for the day and check for the rating, if it has 4 or more out of 5, then add this item to the menu
(For this functionality, new item will be added as a special. For this, the desc attribute of the menu relation will have a value called special). Now for this itemid , we will check the rating from the orders relation. We will have to check, if this rating is 4 or more out of 5.
            */

select A.itemid, B.itemname, avg(rating) as Rating
from menu_order A, menu B
where A.itemid=B.itemid
and description like '%special%'
group by A.itemid, B.itemname
having avg(rating)>=4;

/*   Find the most bought item and check its nutritional value to see if people actually prefer healthier options, based on this introduce new items to the menu 
From the orders relation, identify the itemid that are repeated the most and find the itemname for the corresponding itemid from the menu relation. Check the nutriInfo of the menu relation for this corresponding itemid
      */
select A.itemid, B.itemname, B.nutriinfo as Nutrition
from menu_order A, menu B
where A.itemid=B.itemid
group by A.itemid, B.itemid, B.itemname, B.nutriinfo
having count(A.itemid)=(select max(mycount)
from (select C.itemid, count(C.itemid) mycount
from menu_order C
group by C.itemid));



/*    Find the most repeated customers    */
select phone
from date_order
where phone=(select max(mycount)
from (select phone, count(phone) as mycount
from date_order
group by phone, order_date));


/*    Find the busiest day of the week               */
select order_date as BUSY_DAY
from date_order
group by order_date
having count(order_date)=(select max(mycount)
from(select order_date, count(order_date) mycount
from date_order
group by order_date));


/*  Supplier who supplies the most number of products for a particular month. (Here we have taken the month as October)           */
select distinct A.supplierid,B.suppliername
from supply_info A, supplier B
where A.supplierid=B.supplierid and A.supply_date like '%%OCT%%' and A.supplierid=(select supplierid
from supply_info
group by supplierid
having count(supplierid)=(select max(mycount)from(select supplierid,count(supplierid) as mycount
from supply_info
group by supplierid)));







