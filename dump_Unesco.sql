--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.19
-- Dumped by pg_dump version 9.6.17

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: unesco; Type: SCHEMA; Schema: -; Owner: berachem.markria
--

CREATE SCHEMA unesco;


ALTER SCHEMA unesco OWNER TO "berachem.markria";

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: actu; Type: TABLE; Schema: unesco; Owner: berachem.markria
--

CREATE TABLE unesco.actu (
    titre0 text,
    accroche0 text,
    more0 text,
    image text,
    id integer NOT NULL
);


ALTER TABLE unesco.actu OWNER TO "berachem.markria";

--
-- Name: TABLE actu; Type: COMMENT; Schema: unesco; Owner: berachem.markria
--

COMMENT ON TABLE unesco.actu IS 'Maintenir les caroussel pour Notre Dame';


--
-- Name: actu_id_seq; Type: SEQUENCE; Schema: unesco; Owner: berachem.markria
--

CREATE SEQUENCE unesco.actu_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE unesco.actu_id_seq OWNER TO "berachem.markria";

--
-- Name: actu_id_seq; Type: SEQUENCE OWNED BY; Schema: unesco; Owner: berachem.markria
--

ALTER SEQUENCE unesco.actu_id_seq OWNED BY unesco.actu.id;


--
-- Name: galerie; Type: TABLE; Schema: unesco; Owner: berachem.markria
--

CREATE TABLE unesco.galerie (
    image text,
    description text,
    code integer NOT NULL
);


ALTER TABLE unesco.galerie OWNER TO "berachem.markria";

--
-- Name: TABLE galerie; Type: COMMENT; Schema: unesco; Owner: berachem.markria
--

COMMENT ON TABLE unesco.galerie IS 'Stocke les images et les descriptions de celles-ci';


--
-- Name: COLUMN galerie.code; Type: COMMENT; Schema: unesco; Owner: berachem.markria
--

COMMENT ON COLUMN unesco.galerie.code IS 'nextval(''galerie_seq'')';


--
-- Name: galerie_code_seq; Type: SEQUENCE; Schema: unesco; Owner: berachem.markria
--

CREATE SEQUENCE unesco.galerie_code_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE unesco.galerie_code_seq OWNER TO "berachem.markria";

--
-- Name: galerie_code_seq; Type: SEQUENCE OWNED BY; Schema: unesco; Owner: berachem.markria
--

ALTER SEQUENCE unesco.galerie_code_seq OWNED BY unesco.galerie.code;


--
-- Name: messages; Type: TABLE; Schema: unesco; Owner: berachem.markria
--

CREATE TABLE unesco.messages (
    nom_complet character varying(300),
    email text,
    contenu text,
    id integer NOT NULL
);


ALTER TABLE unesco.messages OWNER TO "berachem.markria";

--
-- Name: TABLE messages; Type: COMMENT; Schema: unesco; Owner: berachem.markria
--

COMMENT ON TABLE unesco.messages IS 'stocke les messages et les informations de la personne qui es envoie';


--
-- Name: messages_id_seq; Type: SEQUENCE; Schema: unesco; Owner: berachem.markria
--

CREATE SEQUENCE unesco.messages_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE unesco.messages_id_seq OWNER TO "berachem.markria";

--
-- Name: messages_id_seq; Type: SEQUENCE OWNED BY; Schema: unesco; Owner: berachem.markria
--

ALTER SEQUENCE unesco.messages_id_seq OWNED BY unesco.messages.id;


--
-- Name: actu id; Type: DEFAULT; Schema: unesco; Owner: berachem.markria
--

ALTER TABLE ONLY unesco.actu ALTER COLUMN id SET DEFAULT nextval('unesco.actu_id_seq'::regclass);


--
-- Name: galerie code; Type: DEFAULT; Schema: unesco; Owner: berachem.markria
--

ALTER TABLE ONLY unesco.galerie ALTER COLUMN code SET DEFAULT nextval('unesco.galerie_code_seq'::regclass);


--
-- Name: messages id; Type: DEFAULT; Schema: unesco; Owner: berachem.markria
--

ALTER TABLE ONLY unesco.messages ALTER COLUMN id SET DEFAULT nextval('unesco.messages_id_seq'::regclass);


--
-- Data for Name: actu; Type: TABLE DATA; Schema: unesco; Owner: berachem.markria
--



--
-- Name: actu_id_seq; Type: SEQUENCE SET; Schema: unesco; Owner: berachem.markria
--

SELECT pg_catalog.setval('unesco.actu_id_seq', 1, false);


--
-- Data for Name: galerie; Type: TABLE DATA; Schema: unesco; Owner: berachem.markria
--

INSERT INTO unesco.galerie VALUES ('http://ekladata.com/QgGLKwVuwb1R5hU9l6nDpK_ZqSQ.jpg', 'La Sainte-Chapelle et le Palais de Justice, gravure anonyme du XIXème siècle', 1);
INSERT INTO unesco.galerie VALUES ('https://frenchmoments.eu/wp-content/uploads/2015/03/Palais-de-la-Cit%C3%A9-in-1615.jpg', 'La place Dauphine et le pont Neuf en 1615, plan de Mérian.', 2);
INSERT INTO unesco.galerie VALUES ('https://vivreparis.fr/wp-content/uploads/2019/08/moyen-age.jpg', 'Miniature tirée du manuscrit Passages d’Outremers de Sabastien Mamerot montrant l’Île de la Cité au XVe siècle.', 4);


--
-- Name: galerie_code_seq; Type: SEQUENCE SET; Schema: unesco; Owner: berachem.markria
--

SELECT pg_catalog.setval('unesco.galerie_code_seq', 4, true);


--
-- Data for Name: messages; Type: TABLE DATA; Schema: unesco; Owner: berachem.markria
--

INSERT INTO unesco.messages VALUES ('Imène', 'imenedahmani7@gmail.com', 'Bonsoir, 
J''aime bien, c fluide :) ', 1);
INSERT INTO unesco.messages VALUES ('Berachem MAKRRIA', 'berachem.markria@gmail.com', 'Dernier Test', 2);
INSERT INTO unesco.messages VALUES ('Imène ', 'imenedahmani7@gmail.com', 'Bonjour, 
J''aime beaucoup c stylé ', 5);
INSERT INTO unesco.messages VALUES ('أحمد', 'ahmad.houssein25@gmail.com', 'هذا ما تفعله. ستدفعون لي تذكرة للحضور وزيارة باريس', 6);
INSERT INTO unesco.messages VALUES ('Nobis ad aliquip Nam', 'qeta@mailinator.com', 'Et maxime aut et ut', 7);
INSERT INTO unesco.messages VALUES ('ttt', 'tt@toto.toto', 'ahah', 9);


--
-- Name: messages_id_seq; Type: SEQUENCE SET; Schema: unesco; Owner: berachem.markria
--

SELECT pg_catalog.setval('unesco.messages_id_seq', 9, true);


--
-- Name: galerie fdf; Type: CONSTRAINT; Schema: unesco; Owner: berachem.markria
--

ALTER TABLE ONLY unesco.galerie
    ADD CONSTRAINT fdf PRIMARY KEY (code);


--
-- Name: messages pk_id; Type: CONSTRAINT; Schema: unesco; Owner: berachem.markria
--

ALTER TABLE ONLY unesco.messages
    ADD CONSTRAINT pk_id PRIMARY KEY (id);


--
-- Name: actu pk_id_actu; Type: CONSTRAINT; Schema: unesco; Owner: berachem.markria
--

ALTER TABLE ONLY unesco.actu
    ADD CONSTRAINT pk_id_actu PRIMARY KEY (id);


--
-- Name: SCHEMA unesco; Type: ACL; Schema: -; Owner: berachem.markria
--

REVOKE ALL ON SCHEMA unesco FROM PUBLIC;
REVOKE ALL ON SCHEMA unesco FROM "berachem.markria";
GRANT ALL ON SCHEMA unesco TO "berachem.markria";
GRANT ALL ON SCHEMA unesco TO "tristan.martinez";


--
-- PostgreSQL database dump complete
--

