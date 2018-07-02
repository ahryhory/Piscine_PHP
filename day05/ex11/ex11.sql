SELECT UPPER(user_card.last_name) AS `NAME`, user_card.first_name, subscription.price
FROM user_card, member, subscription
WHERE subscription.price > 42
AND subscription.id_sub = member.id_sub
AND user_card.id_user = member.id_user_card
ORDER BY user_card.last_name ASC, user_card.first_name ASC;
