create table users
(
    id         int(11) unsigned auto_increment
        primary key,
    first_name varchar(255)                        not null,
    last_name  varchar(255)                        not null,
    genre      varchar(10)                         not null,
    created_at timestamp default CURRENT_TIMESTAMP not null,
    updated_at timestamp default CURRENT_TIMESTAMP not null on update CURRENT_TIMESTAMP
)
    auto_increment = 1;

create table addresses
(
    addr_id int(11) unsigned auto_increment
        primary key,
    user_id int(11) unsigned not null,
    street  varchar(255)     null,
    number  varchar(255)     null,
    constraint addresses_users_id_fk
        foreign key (user_id) references users (id)
)
    auto_increment = 1;