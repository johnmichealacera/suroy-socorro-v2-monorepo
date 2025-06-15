import { Entity, PrimaryGeneratedColumn, Column, CreateDateColumn, UpdateDateColumn, Index, ManyToOne, JoinColumn, OneToMany } from 'typeorm';
import { Barangay } from './barangay.entity';
import { SpotCategory } from './spot-category.entity';
import { Image } from './image.entity';

@Entity('tourist_spots')
export class TouristSpot {
    @PrimaryGeneratedColumn()
    id: number;

    @Column({ type: 'varchar', length: 200 })
    name: string;

    @Column({ type: 'varchar', length: 200, unique: true })
    @Index()
    slug: string;

    @Column({ type: 'text' })
    description: string;

    @Column({ type: 'varchar', length: 500, nullable: true })
    short_description: string;

    @Column({ type: 'int', nullable: true })
    @Index()
    barangay_id: number;

    @ManyToOne(() => Barangay, { onDelete: 'SET NULL' })
    @JoinColumn({ name: 'barangay_id' })
    barangay: Barangay;

    @Column({ type: 'int', nullable: true })
    @Index()
    category_id: number;

    @ManyToOne(() => SpotCategory)
    @JoinColumn({ name: 'category_id' })
    category: SpotCategory;

    @Column({ type: 'decimal', precision: 10, scale: 8, nullable: true })
    latitude: number;

    @Column({ type: 'decimal', precision: 11, scale: 8, nullable: true })
    longitude: number;

    @Column({ type: 'decimal', precision: 10, scale: 2, nullable: true })
    entrance_fee: number;

    @Column({ type: 'varchar', length: 100, nullable: true })
    opening_hours: string;

    @Column({ type: 'varchar', length: 100, nullable: true })
    best_time_to_visit: string;

    @Column({
        type: 'varchar',
        length: 20,
        nullable: true,
        default: 'Easy'
    })
    difficulty_level: string;

    @Column({ type: 'varchar', length: 50, nullable: true })
    estimated_duration: string;

    @Column({ type: 'varchar', length: 20, nullable: true })
    contact_number: string;

    @Column({ type: 'varchar', length: 255, nullable: true })
    website: string;

    @Column({ type: 'text', nullable: true })
    how_to_get_there: string;

    @OneToMany(() => Image, image => image.tourist_spot)
    images: Image[];

    @Column({ type: 'boolean', default: false })
    @Index()
    is_featured: boolean;

    @Column({ type: 'boolean', default: true })
    @Index()
    is_active: boolean;

    @CreateDateColumn()
    created_at: Date;

    @UpdateDateColumn()
    updated_at: Date;
} 