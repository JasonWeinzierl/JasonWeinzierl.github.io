terraform {
  required_providers {
    github = {
      source  = "integrations/github"
      version = "~> 6.13.0"
    }

    namecheap = {
      source  = "namecheap/namecheap"
      version = "~> 2.9.5"
    }
  }

  backend "azurerm" {
    resource_group_name  = "rg-personal-tfstate"
    storage_account_name = "stjweinztf544"
    container_name       = "tfstate"
    key                  = "production.tfstate"
  }
}

provider "github" {
  owner = "JasonWeinzierl"
}

provider "namecheap" {}

data "github_repository" "this" {
  full_name = "JasonWeinzierl/JasonWeinzierl.github.io"
}

resource "github_repository_pages" "this" {
  repository     = data.github_repository.this.name
  build_type     = "workflow"
  cname          = data.namecheap_domain.this.domain
  https_enforced = true
}

data "namecheap_domain" "this" {
  domain = "jasonweinzierl.com"
}

resource "namecheap_domain_records" "this" {
  domain = data.namecheap_domain.this.domain

  # https://docs.github.com/en/pages/configuring-a-custom-domain-for-your-github-pages-site/managing-a-custom-domain-for-your-github-pages-site
  record {
    type     = "A"
    hostname = "@"
    address  = "185.199.108.153"
    ttl      = 1799
  }
  record {
    type     = "A"
    hostname = "@"
    address  = "185.199.109.153"
    ttl      = 1799
  }
  record {
    type     = "A"
    hostname = "@"
    address  = "185.199.110.153"
    ttl      = 1799
  }
  record {
    type     = "A"
    hostname = "@"
    address  = "185.199.111.153"
    ttl      = 1799
  }
  record {
    type     = "AAAA"
    hostname = "@"
    address  = "2606:50c0:8000::153"
    ttl      = 1799
  }
  record {
    type     = "AAAA"
    hostname = "@"
    address  = "2606:50c0:8001::153"
    ttl      = 1799
  }
  record {
    type     = "AAAA"
    hostname = "@"
    address  = "2606:50c0:8002::153"
    ttl      = 1799
  }
  record {
    type     = "AAAA"
    hostname = "@"
    address  = "2606:50c0:8003::153"
    ttl      = 1799
  }
  record {
    type     = "CNAME"
    hostname = "www"
    address  = "jasonweinzierl.github.io."
    ttl      = 1799
  }

  record {
    type     = "TXT"
    hostname = "@"
    address  = "axfvlim64u"
    ttl      = 1799
  }
  # https://docs.github.com/en/pages/configuring-a-custom-domain-for-your-github-pages-site/verifying-your-custom-domain-for-github-pages
  record {
    type     = "TXT"
    hostname = "_github-pages-challenge-jasonweinzierl"
    address  = "74e8e978cc2a483a08a5b8d5b34a68"
    ttl      = 1799
  }
}
