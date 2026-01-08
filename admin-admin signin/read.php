<?php
    

    //$active_policies = $result_array['idcount'];


    /*

    total_active_policies = select count(userid) from policy where status = 'active';
    total_claims = select count(claimid) as claimcount from claims;
    claim_processed = select count(claimid) as claimcount from claims where status = 'completed';
    claim_density = select count(claimid) as density where month(dateTime) = month(curdate());

    policy_analytics = select type, count(userid) from policy;
    claim_types = select type, count(claimid) from claim;
    high_cost_claims = select claimid from claim where claimCost > 100000;

    net_profit = SELECT (SELECT SUM(amount) FROM Payment) - (SELECT SUM(claimcost) FROM Claim) AS net_profit;
    monthly_revenue = select sum(amount) as revenue from payment where MONTH(datetime) = MONTH(CURDATE());
    monthly_profit = select (select sum(amount) from payment where month(datTime) = month(curdate())) - (select sum(claimcost) from claim where month(datetime) = month(curdate())) as monthly_profit; 

    claim_cost = select sum(claimCost) as totalcost from claim;
    monthly_claim_cost = select sum(claimCost) as monthlycost from claim where month(dateTime) = month(curdate);

    select userid, type, heading from claim where statis = 'pending';




    



    */
?>