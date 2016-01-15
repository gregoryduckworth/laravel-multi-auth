@extends('auth.index')

@section('title', 'Admin Auth')

@section('form-action', route('admin.auth.login'))

@section('register', route('admin.auth.register'))
