terraform {
  required_providers {
    github = {
      source  = "integrations/github"
      version = "~> 6.13.0"
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

data "github_repository" "this" {
  full_name = "JasonWeinzierl/JasonWeinzierl.github.io"
}
