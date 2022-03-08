create table users
(
    first_name varchar(255)                                         not null,
    last_name  varchar(255)                                         not null,
    genre      varchar(10)                                          not null,
    created_at timestamp default now()                              not null,
    updated_at timestamp default now()                              not null,
    id         integer   default nextval('users_ids_seq'::regclass) not null
        primary key
);

alter table users
    owner to root;

create table addresses
(
    user_id integer                                                not null
        constraint fk_user_id
            references users,
    street  varchar(255),
    number  varchar(255),
    addr_id integer default nextval('addresses_ids_seq'::regclass) not null
        primary key
);

alter table addresses
    owner to root;